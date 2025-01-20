<?php

namespace App\Http\Controllers\team;

use App\Http\Controllers\Controller;
use App\Models\Team;
use BaconQrCode\Encoder\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode as FacadesQrCode;

class HomeController extends Controller
{
    //

    public function home(Request $request) {
        $data['profile'] = auth('team')->user();
        $data['qrcode'] = FacadesQrCode::size(100, 100)->generate(route('public.team_profile', auth('team')->id()));
        return view('team.home', $data);
    }

    public function edit_profile(Request $request) {
        $data['title'] = "Edit Profile";
        $data['profile'] = auth('team')->user();
        $data['media_links'] = json_decode($data['profile']->media_links);
        // dd($data);
        return view('team.edit_profile', $data);
    }

    public function update_profile(Request $request) {
        $request->validate(['name'=>'required', 'position'=>'required', 'photo'=>'file', 'media_links'=>'array', 'email'=>'required|email']);

        $instance = auth('team')->user();
        if(Team::where('id', '!=', $instance->id)->where(function($query)use($request){$query->where('name', $request->name)->orWhere('email', $request->email);})->count() > 0){
            session()->flash('error', "Name or Email has been used by another account. They must be unique");
            return back();
        }
        $media_links = $request->media_links;
        if(($whatsapp = $media_links['whatsapp']) != null){
            if(!strstr($whatsapp, 'https')){
                $whatsapp = str_replace(' ', '', $whatsapp);
                $media_links['whatsapp_phone'] = $whatsapp;
                if(strlen($whatsapp) <= 9){$whatsapp = '237'.$whatsapp;}
                $media_links['whatsapp'] = 'https://wa.me/'.$whatsapp.'?text=Greetings. Contacting from your PTG profile';
            }
        }
        $update = [
            'name' => $request->name,
            'position' => $request->position,
            'media_links' => json_encode($media_links),
            'email' => $request->email
        ];
        if(($file = $request->file('photo')) != null){
            $fname = str_replace(' ', '_', $request->position).time().'.'.$file->getClientOriginalExtension();
            $img_url = asset('uploads/team/'.$fname);
            $file->storeAs('team', $fname, ['disk'=>'public_uploads']);
            if($instance->img_url != null){
                try {
                    //code...
                    $url = substr($instance->img_url, stripos($instance->img_url, 'uploads'));
                    unlink(public_path($url));
                    Storage::delete($instance->img_url);
                } catch (\Throwable $th) {}
            }
            $update['img_url'] = $img_url;
        }
        $instance->update($update);
        return back()->with('success', "Operation complete");
        
    }

    public function change_password(Request $request) {
        $data['title'] = "Change User Password";
        return view('team.change_password', $data);
    }

    public function update_password(Request $request) {
        $request->validate(['current_password'=>'required', 'new_password'=>'required|min:6', 'confirm_new_password'=>'required|same:new_password']);
        $instance = auth('team')->user();
        if(Hash::check($request->current_password, $instance->password)){
            $instance->update(['password'=>Hash::make($request->new_password)]);
        }

        session()->flash('error', "Current password is wrong");
        return bacK()->withInput();
    }
}

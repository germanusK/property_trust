<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function index(Request $request){
        $data['title'] = "PTG Team Profiles";
        $data['profiles'] = Team::orderBy('name')->get();
        return view('dashboard.team.index', $data);
    }

    public function activate(Request $request, $profile_id) {
        if(($profile = Team::find($profile_id)) != null){
            $profile->update(['status'=>1]);
            session()->flash('success', "Profile activated successfully");
        }else{
            session()->flash('error', "No Profile was found with specified ID");
        }
        return back();
    }

    public function deactivate(Request $request, $profile_id) {
        if(($profile = Team::find($profile_id)) != null){
            $profile->update(['status'=>0]);
            session()->flash('success', "Profile deactivated successfully");
        }else{
            session()->flash('error', "No Profile was found with specified ID");
        }
        return back();
    }

    public function mount(Request $request, $profile_id) {
        if(($profile = Team::find($profile_id)) != null){
            $profile->update(['mount'=>1]);
            session()->flash('success', "Profile mounted successfully");
        }else{
            session()->flash('error', "No Profile was found with specified ID");
        }
        return back();
    }

    public function unmount(Request $request, $profile_id) {
        if(($profile = Team::find($profile_id)) != null){
            $profile->update(['mount'=>0]);
            session()->flash('success', "Profile unmounted successfully");
        }else{
            session()->flash('error', "No Profile was found with specified ID");
        }
        return back();
    }
}

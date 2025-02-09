<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailBase;
use App\Models\Team;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Others extends Controller
{
    //

    function about(){
        $data['title'] = "About";
        return view('about', $data);
    }

    // subscription validator/handler
    function subscribe(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>'required|email'
        ]);
        if ($validator->fails()) {
            # code...
            return redirect()->with($validator->errors());
        }
        // post subscription request
    }

    /**
     * Summary of sendMail
     * @param mixed $mailData ['title'=>'mail heading', 'address'=>'product address', 'name'=>'product item name', 'url'=>'web link to the product item on website', 'due_date'=>'date and time (timestamp) slated for the appointed', 'mail_type'=>'default = 1; appointment notification'], 
     * @param string|array $receiver_address mail address of the reciepient
     * @return void
     */
    public static function sendMail($mailData, $receiver_address)
    {
        # code...
        Mail::to($receiver_address)->send(new MailBase($mailData));
    }

    public function contact()
    {
        # code...
        return view('showcase.contact');
    }

    public function team_profile($id) {
        $data['profile'] = Team::find($id);
        $data['title'] = $data['profile']->position;
        $data['qrcode'] = QrCode::size(100, 100)->generate(route('public.team_profile', $id));
        return view('showcase.team_profile', $data);
    }
    
}

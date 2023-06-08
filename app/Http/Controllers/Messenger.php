<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Messenger extends Controller
{
    //
    function submit(Request $request){
        $validator = Validator::make($request->all(), [
            'type'=>'required|in:message,order,issue',
            'name'=>'required',
            'email'=>'required|email',
            'contact'=>'tel',
            'message'=>'required'
        ]);
        if ($validator->fails()) {
            # code...
            return redirect($request->url())->with($validator->errors());
        }
        // post message
    }
}

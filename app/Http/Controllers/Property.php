<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Property extends Controller
{
    //
    public function index(Request $request){
        return view('property');
    }

    public function services_index()
    {
        # code...
        return view('services');
    }
}

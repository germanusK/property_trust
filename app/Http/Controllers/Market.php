<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Market extends Controller
{
    //
    function index(Request $request){
        return view('market');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketDetails extends Controller
{
    //
    function index(Request $request){
        return view('market-details');
    }
}

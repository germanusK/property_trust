<?php

namespace App\Http\Controllers;

use App\HttpService\HttpServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use Illuminate\Routing\RouteUri;

class PropertyDetails extends Controller
{
    // private $router;

    // function __construct(Router $router)
    // {
    //     $this->router = $router;
    // }

    function index(Request $request){
        
        
        return view('property-details', ['id'=>$request->id]);
    }
}
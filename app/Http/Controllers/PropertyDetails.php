<?php

namespace App\Http\Controllers;

use App\HttpService\HttpServiceProvider;
use App\Models\Asset;
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

    function index(Request $request, $id){
        
        $data['property'] = Asset::find($id);
        $data['related'] = Asset::where('service_id', $data['property']->service_id)->where('town_id', $data['property']->town_id)->orderBy('id', 'DESC')->get();
        return view('showcase.property-details', $data);
    }
}
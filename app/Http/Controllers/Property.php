<?php

namespace App\Http\Controllers;

use App\Models\Service;
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

    public function service_details(Request $request, $service_id)
    {
        # code...
        $data['service'] = Service::find($service_id);
        return view('service_details', $data);
    }
}

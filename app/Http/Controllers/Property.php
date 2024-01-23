<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Services\MailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Property extends Controller
{
    //
    protected $mailService;


public function __construct(MailService $mailService)
    {
        # code...
        $this->mailService = $mailService;
    }
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

    public function services_booking(Request $request, $service_id)
    {
        # code...
        $validity = Validator::make($request->all(), [
            'name'=>'required', 'email'=>'required|email', 'message'=>'required'
        ]);
        if($validity->fails()){
            session()->flash('error', $validity->errors()->first());
            return back()->withInput();
        }
        try {
            //code...
            $service = Service::find($service_id);
            $url = route('public.services.details', $service_id);
            $this->mailService->sendServiceEnquiryEmail($service, $url, $request->name, $request->email, $request->message);
            return back()->with('success', 'Done');
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', $th->getMessage());
        }
    }
}

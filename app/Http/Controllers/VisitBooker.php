<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Customer;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class VisitBooker extends Controller
{
    //
    function index(Request $request, $id){
        $data = Asset::find($id);
        return view('book-visit', ['data'=>$data]);
    }
    
    function submit(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required',
            'due_date'=>'required:timestamp',
            'asset_id'=>'required'
        ]);
        if ($validator->fails()) {
            # code...
            return back()->with('error', $validator->errors()->first())->withInput();
        }
        // return $request->all();

        // Validate request due_date
        $working_hours = collect([
            ['day'=>2, 'name'=>'Monday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>3, 'name'=>'Tuesday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>4, 'name'=>'Wednesday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>5, 'name'=>'Thursday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>6, 'name'=>'Friday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>7, 'name'=>'Saturday', 'open'=>'8:00', 'close'=>'17:00'],
        ]);
        $date = Carbon::createFromTimeString($request->due_date);
        // $day  = $date->dayName;
        // $time = $date->format('H:i');
        // return $day;
        $date = Carbon::parse($request->due_date);
        $time = Carbon::parse($request->due_date)->format('H:i');
        $valid_time = $working_hours->filter(function($row)use($date, $time){
            return ($date->dayOfWeekIso == $row['day']) and (Carbon::parse($time)->between(Carbon::parse($row['open']), Carbon::parse($row['close'])));
        });
        // return $valid_time;
        if(count($valid_time) == 0){
            return back()->with('error', "Unsupported time. ".$request->due_date);
        }

        // return $valid_time;
        // Create user instance
        Customer::updateOrInsert(['name'=>$request->name, 'email'=>$request->email], ['contact'=>$request->contact??'']);
        $customer_id = Customer::where(['name'=>$request->name, 'email'=>$request->email])->first()->id;
        // post schedule
        $instance = new Schedule(['asset_id'=>$request->asset_id, 'customer_id'=>$customer_id, 'due_date'=>$request->due_date]);
        $instance->save();

        $this->send_confirmation_email($instance->customer->email, 'Schedule Updated', "Your schedule for ".$instance->property->name." was updated to ".$instance->due_date. " (status: ".$instance->status.")", route('schedule.confirm', $instance->id));

        return back()->with('success', "confirm email was sent to ".$instance->customer->email);
        
    }
}

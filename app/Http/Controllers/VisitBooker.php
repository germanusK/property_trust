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

        // Validate request due_date
        $working_hours = collect([
            ['day'=>1, 'name'=>'Sunday', 'open'=>'12:00', 'close'=>'17:00'],
            ['day'=>2, 'name'=>'Monday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>3, 'name'=>'Tuesday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>4, 'name'=>'Wednesday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>5, 'name'=>'Thursday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>6, 'name'=>'Friday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>7, 'name'=>'Saturday', 'open'=>'12:00', 'close'=>'17:00'],
        ]);
        $date = Carbon::createFromTimeString($request->due_date);
        $day  = $date->dayName;
        $time = $date->format('H:i');
        // return $time;
        $valid_time = $working_hours->filter(function($row)use($date){
            return $date->dayName == $row['name'] && $date->between(Carbon::createFromTimeString($row['open']), Carbon::createFromTimeString($row['close']));
        });
        if($valid_time->count() == 0){
            return back()->with('error', "Unsupported time. ".$working_hours->__toString())->withInput();
        }

        // return $valid_time;
        // Create user instance
        Customer::updateOrInsert(['name'=>$request->name, 'email'=>$request->email], ['contact'=>$request->contact??'']);
        $customer_id = Customer::where(['name'=>$request->name, 'email'=>$request->email])->first()->id;
        // post schedule
        $instance = new Schedule(['asset_id'=>$request->asset_id, 'customer_id'=>$customer_id, 'due_date'=>$request->due_date]);
        $instance->save();
        return back()->with('success', 'Done');
        
    }
}

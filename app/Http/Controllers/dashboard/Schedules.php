<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Schedule;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class Schedules extends Controller
{
    //
    public function index()
    {
        # code... 
        $data['title'] = "All Schedules";
        $data['schedules'] = Schedule::orderBy('id', 'DESC')->get();
        return view('dashboard.schedules.index', $data);
    }

    public function edit($id)
    {
        # code...
        $sch = Schedule::find($id);
        $data['schedule'] = $sch;
        $data['title'] = "Edit Schedule (".$sch->customer->name.' | '.$sch->property->name.' | '.$sch->due_date.")";
        return view('dashboard.schedules.edit', $data);
    }

    public function filter(Request $request)
    {
        switch ($request->type) {
            case 'pending':
                $data['title'] = "Pending Schedules";
                $data['schedules'] = Schedule::where('status', 'pending')->whereDate('due_date', '>=', now()->format('Y-m-d'))->orderBy('id', 'DESC')->get();
                break;
            case 'achieved':
                $data['title'] = "Achieved Schedules";
                $data['schedules'] = Schedule::where('status', 'achieved')->orderBy('id', 'DESC')->get();
                break;
            case 'expired':
                $data['title'] = "Expired Schedules";
                $data['schedules'] = Schedule::where(function($q){
                    $q->whereDate('due_date', '<', now()->format('Y-m-d'))->orWhere('status', 'expired');
                })->orderBy('id', 'DESC')->get();
                break;
        }
        return view('dashboard.schedules.index', $data);
    }

    public function update(Request $request, $id)
    {
        # code...
        $validity = Validator::make($request->all(), ['due_date'=>'required', 'status'=>'required']);
        if($validity->fails()){
            return back()->with('error', $validity->errors()->first());
        }

         // Validate request due_date
         $working_hours = collect([
            ['day'=>2, 'name'=>'Monday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>3, 'name'=>'Tuesday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>4, 'name'=>'Wednesday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>5, 'name'=>'Thursday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>6, 'name'=>'Friday', 'open'=>'8:00', 'close'=>'17:00'],
            ['day'=>7, 'name'=>'Saturday', 'open'=>'8:00', 'close'=>'17:00'],
        ]);
        $date = Carbon::parse($request->due_date);
        $time = Carbon::parse($request->due_date)->format('H:i');
        $valid_time = $working_hours->filter(function($row)use($date, $time){
            return ($date->dayOfWeekIso == $row['day']) and (Carbon::parse($time)->between(Carbon::parse($row['open']), Carbon::parse($row['close'])));
        });
        // return $valid_time;
        if(count($valid_time) == 0){
            return back()->with('error', "Unsupported time. ".$request->due_date);
        }

        // update schedule proper
        $schedule = Schedule::find($id);
        if($schedule != null){
            $schedule->due_date = $request->due_date;
            $schedule->status = $request->status;
            $schedule->save();

            $this->send_email($schedule->customer->email, 'Schedule Updated', "Your schedule for ".$schedule->property->name." was updated to ".$schedule->due_date. " (status: ".$schedule->status.")");
            return back()->with('success', "Done");
        }
    }

    public function preview($id)
    {
        # code...
        $data['schedule'] = Schedule::find($id);
        $data['title'] = "Schedule Details ( property : ".$data['schedule']->property->name." | customer : ".$data['schedule']->customer->name.")";
        return view('dashboard.schedules.preview', $data);
    }

    public function delete($id)
    {
        # code...
        $item  = Schedule::find($id);
        if($item != null){
            $item->delete();
            return back()->with('success', 'Done');
        }
        return back()->with('error', 'Schedule not found.');
    }
}

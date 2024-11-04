<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function index() {
        $data['title'] = "Up-coming Events";
        $data['events'] = Event::whereAfter('date', now())->orderBy('date', 'ASC')->get();
        return view('dashboard.event.index', $data);
    }

    public function acheived() {
        $data['title'] = "Acheived Events";
        $data['events'] = Event::whereBefore('date', now())->orderBy('date', 'DESC')->get();
        return view('dashboard.event.acheived', $data);
    }

    public function create(){
        $data['title'] = "Create New Event";
        return view('dashbaord.event.create', $data);
    }

    public function show($id){
        $data['event'] = Event::find($id);
        $data['title'] = "Event Details: ".$data['event']->name;
        return view('dashbaord.event.show', $data);
    }

    public function store(Request $request){
        
    }

    public function edit(Request $request, $id){
        $data['event'] = Event::find($id);
        $data['title'] = "Edit Event: ".$data['event']->name;
        return view('dashboard.event.edit', $data);
    }

    public function update(Request $request, $id){
        
    }

    public function delete($id){
        $event = Event::find($id);
        if($event == null){
            return back()->with('error', 'Event not found');
        }
        $event->delete();
        return back()->with('error', "Operation Complete");
    }


}

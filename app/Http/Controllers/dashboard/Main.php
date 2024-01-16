<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\Customer;
use App\Models\FAQ;
use App\Models\Project;
use App\Models\Schedule;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;

class Main extends Controller
{
    //
    function index(Request $request){

        
        $asset_base = Asset::whereYear('created_at', '!=', now()->format('Y'))->count();
        $service_base = Service::whereYear('created_at', '!=', now()->format('Y'))->count();
        $project_base = Project::whereYear('created_at', '!=', now()->format('Y'))->count();

        $assets = Asset::whereYear('created_at', now()->format('Y'))->count();
        $services = Service::whereYear('created_at', now()->format('Y'))->count();
        $projects = Project::whereYear('created_at', now()->format('Y'))->count();

        $base = $asset_base + $service_base + $project_base;
        $change = $assets + $services + $projects;

        $data['growth'] = $change * 100/($base == 0 ? 1 : $base);
        return view('dashboard.home', $data);
    }

    public function create()
    {
        # code...
    }

    public function user_profile()
    {
        # code...
        $data['title'] = "My Profile";
        $data['user'] = auth()->user();
        return view('dashboard.user_profile', $data);
    }

    public function faqs($item_id = null)
    {
        # code...
        $data['title'] = "FAQs Management";
        $data['data'] = FAQ::orderBy('id', 'DESC')->get();
        $data['item'] = $item_id == null ? NULL : FAQ::find($item_id);
        return view('dashboard.faqs', $data);
    }

    public function update_faqs(Request $request, $item_id = null)
    {
        # code...
        $validity = Validator::make($request->all(), ['title'=>'required', 'content'=>'required']);
        if($validity->fails()){
            session()->flash('error', $validity->errors()->first());
            return back()->withInput();
        }

        $data = ['title'=>$request->title, 'content'=>$request->content];
        if($item_id != null){
            $instance = FAQ::find($item_id);
            if(FAQ::where('title', $request->title)->where('id', '!=', $item_id)->count() > 0){
                session()->flash('error', "An item with this title already exist");
                return back()->withInput();
            }
        }else{
            $instance = new FAQ();
            if(FAQ::where('title', $request->title)->count() > 0){
                session()->flash('error', "An item with this title already exist");
                return back()->withInput();
            }
        }
        $instance->fill($data);
        $instance->save();
        return back()->with('success', "Operation Complete");
    }

    public function delete_faqs($item_id)
    {
        # code...
        $faq = FAQ::find($item_id);
        if($faq != null){
            $faq->delete();
            return back()->with('success', "Operation Complete");
        }
        return back()->with('error', "Operation Failed. Item not found");
    }
}

<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\AssetCategory;
use App\Models\AssetGrade;
use App\Models\AssetImage;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Object_;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Property extends Controller
{


    // ASSET MANAGEMENT
    public function index()
    {
        # code...
        return view('dashboard.property.index');
    }

    public function create()
    {
        # code...
        return view('dashboard.property.create');
    }

    public function store(Request $request)
    {
        # code...
        // return $request->all();
        $valid = Validator::make($request->all(), [
            'name'=>'required',
            'categories'=>'required|array',
            'price'=>'required',
            'grades'=>'required|array',
            'images'=>'required',
            'images[*]'=>'mimes:jpg,png,jpeg,gif'
        ]);
       
        if (!$valid->fails()) {

            // save asset
            $asset = new Asset(['name' => $request->name, 'quantity'=>$request->quantity??1, 'price' => $request->price, 'description' => $request->description ?? '']);
            $asset->save();
            $asset_id = $asset->id;

            // upload and save images
            $files = $request->images;
            // dd($files);
            if (count($files) > 0) {
                # code...
                foreach ($files as $key => $file) {
                    # code...
                    $ext = $file->getClientOriginalExtension();
                    $name = '_' . time() . '_' . rand(100000, 999999) . '.' . $ext;
                    $path = '/storage/asset_images';
                    $pathname = $path.'/'.$name;
                    $file->move(storage_path('app/public/asset_images'), $name);
                    AssetImage::create(['asset_id' => $asset_id, 'url' => $pathname]);
                }
            }

            // save categories
            foreach ($request->categories as $key => $cat) {
                # code...
                AssetCategory::create(['asset_id' => $asset_id, 'category_id' => $cat]);
            }
            // save grades
            foreach ($request->grades as $key => $grd) {
                # code...
                AssetGrade::create(['asset_id'=>$asset_id, 'grade_id'=>$grd]);
            }

            return back()->with('success', 'Done');
        }
        else{
            // alert for validation errors
            return back()->with('error', $valid->errors()->first());
        }
        
    }

    public function edit($id)
    {
        # code...
        $data['data'] = Asset::find($id);
        
        return view('dashboard.property.edit', $data);
    }

    public function update($id, Request $request)
    {
        try {
            //code...
            # code to perform update...
            $valid = Validator::make($request->all(), [
                'name'=>'required',
                'group'=>'required|in:RE,GC,ARCH,CONS',
                'category'=>'required',
                'price'=>'required',
                'grade'=>'required|in:1,2,3,4',
            ]);
            if (!$valid->fails()) {
                # code...
            }
            # redirect back on response
        } catch (\Throwable $th) {
            //throw $th;
        }

    }

    public function preview($id)
    {
        # code...
        // fetch item data
        $data['data'] = Asset::find($id);
        return view('dashboard.property.preview', $data);
    }

    public function delete($id)
    {
        # code...
        $asset = Asset::find($id);
        if (!$asset == null) {
            # code...
            $asset->delete();
            return back()->with('success', 'Done');
        }
        else {
            return back()->with('error', 'Asset not found');
        }
    }

    // END OF ASSET MANAGEMENT


    // SERVICE MANAGEMENT
    public function services(Request $request)
    {
        $data['title'] = "Services";
        $data['data'] = Service::all();
        return view('dashboard.services.index', $data);
    }
    
    public function show_service(Request $request, $id)
    {
        # code...
        $data['service'] = Service::find($id);
        return view('dashboard.services.show', $data);
    }

    public function create_service(Request $request)
    {
        # code...
        $data['title'] = "Create New Service";
        return view('dashboard.services.create', $data);
    }

    public function store_service(Request $request)
    {
        # code...
        $validity = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required|email',
            'service_icon'=>'required|file',
            'description'=>'required|string'
        ]);
        if($validity->fails()){
            return back()->with('error', $validity->errors()->first());
        }

        // create service
        $service = new Service();
        $service->fill($request->all());
        $service->save();
        return back()->with('success', 'Done');
    }
    
    public function edit_service(Request $request, $id)
    {
        # code...
        $data['title'] = "Edit Service";
        $data['service'] = Service::find($id);
        return view('dashboard.services.edit', $data);
    }

    public function update_service(Request $request, $id)
    {
        # code...
        $validity = Validator::make($request->all(), []);
        if($validity->fails()){
            return back()->with('error', $validity->errors()->first());
        }

        // update service
        $service = Service::find($id);
        if($service == null){
            $service = new Service();
        }
        $service->fill($request->all());
        $service->save();
        return back()->with('success', 'Done');
    }

    public function delete_service(Request $request, $id)
    {
        # code...
        $item = Service::find($id);
        if($item != null){
            $item->delete();
            return back()->with('success', 'Done');
        }
        return back()->with('error', 'Service not found.');
    }

    // END SERVICE MANAGEMENT


    // PROJECT MANAGEMENT
    public function projects(Request $request)
    {
        # code...
        $data['title'] = "Projects";
        $data['data'] = Project::all();
        return view('dashboard.projects.index', $data);
    }
    
    public function show_project(Request $request, $id)
    {
        # code...
        $data['project'] = Project::find($id);
        return view('dashboard.projects.show', $data);
    }

    public function create_project(Request $request)
    {
        # code...
        $data['title'] = "Create New Project";
        return view('dashboard.projects.create', $data);
    }

    public function store_project(Request $request)
    {
        # code...
        $validity = Validator::make($request->all(), []);
        if($validity->fails()){
            return back()->with('error', $validity->errors()->first());
        }

        // create project
        $project = new Project();
        $project->fill($request->all());
        $project->save();
        return back()->with('success', 'Done');
    }
    
    public function edit_project(Request $request, $id)
    {
        # code...
        $data['title'] = "Edit Project";
        $data['project'] = Project::find($id);
        return view('dashboard.projects.edit', $data);
    }

    public function update_project(Request $request, $id)
    {
        # code...
        $validity = Validator::make($request->all(), []);
        if($validity->fails()){
            return back()->with('error', $validity->errors()->first());
        }

        // update project
        $project = Project::find($id);
        if($project == null){
            $project = new Project();
        }
        $project->fill($request->all());
        $project->save();
        return back()->with('success', 'Done');
    }

    public function delete_project(Request $request, $id)
    {
        # code...
        $item = Project::find($id);
        if($item != null){
            $item->delete();
            return back()->with('success', 'Done');
        }
        return back()->with('error', 'Project not found.');
    }

    // END PROJECT MANAGEMENT
   
}

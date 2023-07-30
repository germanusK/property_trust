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
                    $path = asset('uploads/asset_images');
                    $pathname = $path.'/'.$name;
                    $file->storeAs('asset_images', $name, ['disk'=>'public_uploads']);
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
            if ($valid->fails()) {
                return back()->with('error', $valid->errors()->first());
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
            'service_icon'=>'required|file',
            'description'=>'required|string'
        ]);
        if($validity->fails()){
            return back()->with('error', $validity->errors()->first());
        }

        $file = $request->file('service_icon');
        $ext = $file->getClientOriginalExtension();
        $path = asset('uploads/service_icons');
        $filename = '__'.random_int(1000000001, 9999999999).'__'.time().'.'.$ext;
        $file->storeAs('service_icons', $filename, ['disk'=>'public_uploads']);
        $icon_path = $path.'/'.$filename;


        // create service
        $service = new Service();
        $service->fill($request->all());
        $service->icon_path = $icon_path;
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
        $validity = Validator::make($request->all(), [
            'name'=>'required', 'description'=>'required'
        ]);
        if($validity->fails()){
            return back()->with('error', $validity->errors()->first());
        }
        // update service
        $service = Service::find($id);
        if($service == null){
            $service = new Service();
        }

        $service->fill($request->all());
        if($request->has('service_icon')){
            $file = $request->file('service_icon');
            $ext = $file->getClientOriginalExtension();
            $path = asset('uploads/service_icons');
            $filename = '__'.random_int(1000000001, 9999999999).'__'.time().'.'.$ext;
            $file->storeAs('service_icons', $filename, ['disk'=>'public_uploads']);
            $icon_path = $path.'/'.$filename;
            $service->icon_path = $icon_path;
        }
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

    public function service_images(Request $request, $service_id)
    {
        # code...
        $service = Service::find($service_id);
        $data['title'] = $service->name.' Service Images';
        $data['images'] = $service->images;
        // dd($data);
        return view('dashboard.services.images', $data);
    }
    
    public function add_service_images(Request $request, $service_id)
    {
        # code...
        $validity = Validator::make($request->all(), ['files'=>'required']);
        if($validity->fails()){
            return back()->with('error', $validity->errors()->first());
        }
        // dd( $request->file('files'));

        $files = $request->file('files');
        if(is_array($files)){
            $paths = [];
            foreach ($files as $file) {
                # code...
                $ext = $file->getClientOriginalExtension();
                $path = asset('uploads/service_images');
                $filename = '__'.random_int(1000000001, 9999999999).'__'.time().'.'.$ext;
                $file->storeAs('service_images', $filename, ['disk'=>'public_uploads']);
                $icon_path = $path.'/'.$filename;
                array_push($paths, $icon_path);
            }
            $records = array_map(function($p)use($service_id){
                return ['asset_id'=>$service_id, 'url'=>$p, 'type'=>'service'];
            }, $paths);
            AssetImage::insert($records);
        }else{
            $ext = $files->getClientOriginalExtension();
            $path = asset('uploads/service_images');
            $filename = '__'.random_int(1000000001, 9999999999).'__'.time().'.'.$ext;
            $files->storeAs('service_images', $filename, ['disk'=>'public_uploads']);
            $icon_path = $path.'/'.$filename;
            AssetImage::insert(['asset_id'=>$service_id, 'url'=>$icon_path, 'type'=>'service']);
        }
        return back()->with('success', "Done");
    }



    // END SERVICE MANAGEMENT


    // PROJECT MANAGEMENT
    public function projects(Request $request, $service_id = null)
    {
        # code...
        $data['title'] = "Projects";
        $data['data'] = Project::all();
        if($service_id != null){
            $data['data'] = $data['data']->where('service_id', $service_id);
        }
        return view('dashboard.projects.index', $data);
    }
    
    public function show_project(Request $request, $id)
    {
        # code...
        $data['project'] = Project::find($id);
        return view('dashboard.projects.show', $data);
    }

    public function create_project(Request $request, $service_id)
    {
        # code...
        $data['title'] = "Create New Project";
        return view('dashboard.projects.create', $data);
    }

    public function store_project(Request $request, $service_id)
    {
        # code...
        $validity = Validator::make($request->all(), ['name'=>'required', 'address'=>'required', 'description'=>'required', 'images'=>'required']);
        if($validity->fails()){
            return back()->with('error', $validity->errors()->first());
        }

        // create project
        $project = new Project();
        $data = $request->all();
        $data['service_id'] = $service_id;
        $project->fill($data);
        $project->save();

        // store images
        $files = $request->file('images');
        if(is_array($files)){
            $paths = [];
            foreach ($files as $file) {
                # code...
                $ext = $file->getClientOriginalExtension();
                $path = asset('uploads/project_images');
                $filename = '__'.random_int(1000000001, 9999999999).'__'.time().'.'.$ext;
                $file->storeAs('project_images', $filename, ['disk'=>'public_uploads']);
                $icon_path = $path.'/'.$filename;
                array_push($paths, $icon_path);
            }
            $records = array_map(function($p)use($project){
                return ['asset_id'=>$project->id, 'url'=>$p, 'type'=>'project'];
            }, $paths);
            AssetImage::insert($records);
        }else{
            $ext = $files->getClientOriginalExtension();
            $path = asset('uploads/project_images');
            $filename = '__'.random_int(1000000001, 9999999999).'__'.time().'.'.$ext;
            $files->storeAs('project_images', $filename, ['disk'=>'public_uploads']);
            $icon_path = $path.'/'.$filename;
            AssetImage::insert(['asset_id'=>$project->id, 'url'=>$icon_path, 'type'=>'project']);
        }
        
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
        $validity = Validator::make($request->all(), ['name'=>'required', 'address'=>'required', 'description'=>'required']);
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

    // show/edit project images
    public function project_images(Request $request, $project_id)
    {
        # code...
        $project = Project::find($project_id);
        if($project != null){
            $data['title'] = "Project Images For ".$project->name;
            $data['images'] = AssetImage::where('asset_id', $project_id)->where('type', 'project')->get();
            return view('dashboard.projects.images', $data);
        }
        return back()->with('error', "Service not found.");
    }

    // update service images
    public function update_project_images(Request $request, $project_id)
    {
        $validity = Validator::make($request->all(), ['urls'=>'array|required']);//optional field: images

        if($validity->fails()){
            return back()->with('error', $validity->errors()->first());
        }

        $urls = $request->urls;
        $old_urls = AssetImage::where('asset_id', $project_id)->where('type', 'project')->get(['id', 'url']);

        // drop unchecked photos
        if(count($urls) != count($old_urls)){
            $deleted = collect($old_urls)->whereNotIn('url', $urls)->each(function($img){$img->delete();});
        }

        // add any additional images
        if($request->has('images') and $request->images != null){
            $files = $request->file('images');
            foreach ($files as $key => $file) {
                # code...
                $ext = $file->getClientOriginalExtension();
                $path = asset('uploads/project_images');
                $filename = '__'.random_int(1000000001, 9999999999).'__'.time().'.'.$ext;
                $file->storeAs('project_images', $filename, ['disk'=>'public_uploads']);
                $icon_path = $path.'/'.$filename;
                $image = new AssetImage(['asset_id'=>$project_id, 'url'=>$icon_path, 'description'=>'__project_image', 'type'=>'project']);
                $image->save();
            }
        }

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

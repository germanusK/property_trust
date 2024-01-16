<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\AssetImage;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Service;
use App\Models\ServiceImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Throwable;

class Property extends Controller
{

    // ASSET MANAGEMENT
    public function index(Request $request, $service_id = null)
    {
        # code...
        $data['title'] = "All Property";
        $data['data'] = Asset::all();
        if($service_id != null){
            $data['data'] = Service::find($service_id)->property;
        }
        if($request->has('catex1')){
            $data['data'] = \App\Models\Category::find($request->catex1)->assets;
        }
        return view('dashboard.property.index', $data);
    }

    public function create()
    {
        # code...
        $data['title'] = "Add New Property";
        return view('dashboard.property.create', $data);
    }

    public function store(Request $request, $service_id)
    {
        # code...
        $valid = Validator::make($request->all(), ['name'=>'required', 'price'=>'required', 'description'=>'required',
        'address'=>'required', 'images'=>'required']);
       
        if ($valid->fails()) {
            // alert for validation errors
            session()->flash('error', $valid->errors()->first());
            return back()->withInput();
        }
        
        try{
            // save asset
            DB::beginTransaction();
            $asset = new Asset(['name' => $request->name, 'service_id'=>$service_id, 'address'=>$request->address, 'price' => $request->price, 'description' => $request->description ?? '']);
            // dd($asset);
            $asset->save();
            $asset_id = $asset->id;
    
            // upload and save images
            $files = $request->images;
            // dd($files);
            if (($files = $request->file('images')) != null) {
                # code...
                $images = [];
                foreach ($files as $key => $file) {
                    # code...
                    $ext = $file->getClientOriginalExtension();
                    $name = '_' . time() . '_' . rand(100000, 999999) . '.' . $ext;
                    $path = asset('uploads/asset_images');
                    $pathname = $path.'/'.$name;
                    $file->storeAs('asset_images', $name, ['disk'=>'public_uploads']);
                    $images[] = ['asset_id' => $asset_id, 'img_path' => $pathname];
                }
                AssetImage::insert($images);
            }
            DB::commit();
    
            return back()->with('success', 'Done');
        }
        catch(Throwable $th){
            DB::rollBack();
            session()->flash('error', $th->getMessage());
            return back()->withInput();
        }

    }

    public function edit($id)
    {
        # code...
        $data['title'] = "Update Property";
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
        $data['item'] = Asset::find($id);
        return view('dashboard.property.preview', $data);
    }

    public function images($id)
    {
        # code...
        // fetch item data
        $data['item'] = Asset::find($id);
        return view('dashboard.property.images', $data);
    }

    public function update_images(Request $request, $id)
    {
        # code...
        $validity = Validator::make($request->all(), ['images'=>'array', 'old_images'=>'array']);
        if($validity->fails()){
            session()->flash('error', $validity->errors()->first());
            return back()->withInput();
        }
        
        // update old_images
        if(($old_images = $request->old_images) != null){
            AssetImage::whereNotIn('id', $request->old_images)->each(function($record){
                if(file_exists($record->img_path))
                    unlink($record->img_path);
                $record->delete();
            });
        }

        // save additional images
        if(($files = $request->file('images')) != null){
            $images = [];
            foreach ($files as $key => $file) {
                # code...
                $path = asset('uploads/asset_images');
                $fname = 'prop_'.time().'_'.random_int(1000000, 9999999).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('uploads/asset_images'), $fname);
                $images[] = ['img_path'=>$path.'/'.$fname, 'asset_id'=>$id];
            }
            AssetImage::insert($images);
        }

        return redirect()->route('rest.assets.show', $id)->with('success', "Operation complete");
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
        $request->validate(['name'=>'required', 'caption'=>'required', 'category_id'=>'required',
            'image'=>'required|file', 'price'=>'numeric', 'description'=>'required']);

        
        $data = ['name'=>$request->name??'', 'caption'=>$request->caption??'', 'category_id'=>$request->category_id??'', 
            'price'=>$request->price??'', 'description'=>$request->description??''];
        
        if(Service::whereName($request->name)->count() > 0){
            session()->flash('error', 'Servce already exists with same name');
            return back()->withInput();
        }

        // create service
        $service = new Service($data);
        $service->save();

        if(($file = $request->file('image')) != null){
            $ext = $file->getClientOriginalExtension();
            $path = asset('uploads/service_icons/');
            $filename = '__'.random_int(1000000001, 9999999999).'__'.time().'.'.$ext;
            $file->storeAs('service_icons', $filename, ['disk'=>'public_uploads']);
            $service->update(['img_path'=>$path.$filename]);
        }


        
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
        $request->validate(['name'=>'required', 'caption'=>'required', 'category_id'=>'required',
            'image'=>'required|file', 'price'=>'numeric', 'description'=>'required']);

        
        $data = ['name'=>$request->name??'', 'caption'=>$request->caption??'', 'category_id'=>$request->category_id??'', 
            'price'=>$request->price??'', 'description'=>$request->description??''];
        
        if(Service::whereName($request->name)->where('id', $id)->count() > 0){
            session()->flash('error', 'Servce already exists with same name');
            return back()->withInput();
        }
        $service = Service::find($id);

        if(($file = $request->file('image')) != null){
            $ext = $file->getClientOriginalExtension();
            $path = asset('uploads/service_icons');
            $filename = '__'.random_int(1000000001, 9999999999).'__'.time().'.'.$ext;
            $file->storeAs('service_icons', $filename, ['disk'=>'public_uploads']);
            $data['img_path'] = $path.'/'.$filename;
            $service->img_path != null ? unlink($service->img_path) : null;
        }
        // dd($data);


        // create service
        $service->update($data);
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
        $data['service'] = Service::find($service_id);
        $data['title'] = "Service Images";
        // $data['images'] = $service->images;
        // dd($data);
        return view('dashboard.services.images', $data);
    }
    
    public function add_service_images(Request $request, $service_id)
    {
        # code...
        $validity = Validator::make($request->all(), ['images'=>'array', 'old_images'=>'array']);
        if($validity->fails()){
            session()->flash('error', $validity->errors()->first());
            return back()->withInput();
        }
        
        // update old_images
        if(($old_images = $request->old_images) != null){
            ServiceImage::whereNotIn('id', $request->old_images)->each(function($record){
                if(file_exists($record->img_path))
                    unlink($record->img_path);
                $record->delete();
            });
        }

        // save additional images
        if(($files = $request->file('images')) != null){
            $images = [];
            foreach ($files as $key => $file) {
                # code...
                $path = asset('uploads/asset_images');
                $fname = 'prop_'.time().'_'.random_int(1000000, 9999999).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('uploads/asset_images'), $fname);
                $images[] = ['img_path'=>$path.'/'.$fname, 'service_id'=>$service_id];
            }
            ServiceImage::insert($images);
        }
        return redirect()->route('rest.services.show', $service_id)->with('success', "Done");
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
        if($request->has('catex1')){
            $data['data'] = \App\Models\Category::find($request->catex1)->projects;
        }
        // dd($data);
        return view('dashboard.projects.index', $data);
    }
    
    public function show_project(Request $request, $id)
    {
        # code...
        $data['title'] = "Product Details";
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
        $request->validate(['name'=>'required', 'address'=>'required', 'description'=>'required', 'images'=>'required']);

        // create project
        $project = new Project();
        $data = ['name'=>$request->name??'', 'address'=>$request->address??'', 'description'=>$request->description, 'service_id'=>$service_id];
        $data['service_id'] = $service_id;
        $project->fill($data);
        $project->save();

        // store images
        $files = $request->file('images');
        if($files != null){
            $paths = [];
            foreach ($files as $file) {
                # code...
                $ext = $file->getClientOriginalExtension();
                $path = asset('uploads/project_images');
                $filename = 'project__'.random_int(1000000001, 9999999999).'__'.time().'.'.$ext;
                $file->storeAs('project_images', $filename, ['disk'=>'public_uploads']);
                $icon_path = $path.'/'.$filename;
                array_push($paths, $icon_path);
            }
            $records = array_map(function($p)use($project){
                return ['project_id'=>$project->id, 'img_path'=>$p];
            }, $paths);
            ProjectImage::insert($records);
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
        $validity = Validator::make($request->all(), ['name'=>'required', 'address'=>'required', 'description'=>'required', 'images'=>'required', 'service_id'=>'required']);

        if($validity->fails()){
            session('error', $validity->errors()->first());
            return back()->withInput();
        }
        // create project
        $project = Project::find($id);
        
        // update project
        $data = ['name'=>$request->name??'', 'address'=>$request->address??'', 'description'=>$request->description, 'service_id'=>$request->service_id];
        if(Project::where(['name'=>$request->name])->where('id', '!=', $id)->count() > 0){
            session()->flash('error', "Another project with the same name already exist");
            return back()->withInput();
        }
        Project::updateOrInsert(['id'=>$id], $data);
        return back()->with('success', 'Done');
    }

    // show/edit project images
    public function project_images(Request $request, $project_id)
    {
        # code...
        $project = Project::find($project_id);
        if($project != null){
            $data['title'] = "Project Images For ".$project->name;
            $data['project'] = $project;
            return view('dashboard.projects.images', $data);
        }
        return back()->with('error', "Service not found.");
    }

    // update service images
    public function update_project_images(Request $request, $project_id)
    {
        $request->validate(['old_images'=>'array', 'images'=>'array']);//optional field: images

        
        if(($old_images = $request->old_images) != null){
            // delete unchecked images
            ProjectImage::where('project_id', $project_id)->whereNotIn('id', $old_images)->each(function($rec){
                $rec->delete();
            });
        }


        // add any additional images
        if(($files = $request->file('images')) != null){
            $project_images = [];
            foreach ($files as $key => $file) {
                # code...
                $ext = $file->getClientOriginalExtension();
                $path = asset('uploads/project_images');
                $filename = 'project__'.random_int(1000000000, 9999999999).'__'.time().'.'.$ext;
                $file->storeAs('project_images', $filename, ['disk'=>'public_uploads']);
                $icon_path = $path.'/'.$filename;
                $project_images[] = ['project_id'=>$project_id, 'img_path'=>$icon_path];
            }
            ProjectImage::insert($project_images);
        }
        return redirect()->route('rest.projects.show', $project_id);

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

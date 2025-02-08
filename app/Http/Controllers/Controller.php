<?php

namespace App\Http\Controllers;

use App\Mail\Confirmation;
use App\Models\Asset;
use App\Models\Category;
use App\Models\Grade;
use App\Models\MailingList;
use App\Models\Project;
use App\Models\Team;
use App\Models\Town;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct()
    {
        // asset();
    }

    function _index(){
        // return '---------------------------';
        // get latest/trending items 
        $assets = Asset::orderBy('id', 'DESC')->take(12)->get();
        $data['team'] = Team::where('status', 1)->where('mount', 1)->get();
        $data['assets'] = $assets;
        $data['projects'] = \App\Models\Project::inRandomOrder()->take(6)->get();
        // $data['service_images'] = \App\Models\Service::join('service_images', ['service_images.service_id'=>'services.id'])->select(['service_images.*', 'services.name', 'services.caption'])->inRandomOrder()->take(12)->get();
        return view('showcase.index', $data);
    }

    function setSenderEmailAddress(Request $request){
        $path = base_path('.env');
        
        if ( file_exists($path) ) {
            # code...
            // file_put_contents($path, str_replace('MAIL_FROM_ADDRESS='.$this->laravel['config']['mail.from.address'], 'MAIL_FROM_ADDRESS='.$request->get('email'), file_get_contents($path)));
        }
    }


    // SEARCH 
    function search(){}


    public function category_index()
    {
        # code...
        $data['title'] = "Categories";
        return view('dashboard.categories.index', $data);
    }
    

    public function category_show(Request $request, $id)
    {
        # code...
        $cat = Category::find($id);
        $data['category'] = $cat;
        $data['title'] = "Categories Details";
        return view('dashboard.categories.show', $data);
    }


    public function category_create()
    {
        # code...
        $data['title'] = "Create New Category";
        $data['categories'] = Category::whereNull('parent_id')->get();
        return view('dashboard.categories.create', $data);
    }

    public function category_edit($id)
    {
        # code...
        $data['category'] = Category::find($id);
        $data['categories'] = Category::whereNull('parent_id')->get();
        $data['title'] = "Edit Category / ".$data['category']->name??'';
        return view('dashboard.categories.edit', $data);
    }
    public function category_delete($id)
    {
        # code...
        $category = Category::find($id);
        if (!$category == null) {
            # code...
            $category->delete();
            return back()->with('success', 'Done');
        }
        return back()->with('error', 'Category not found');
    }

    public function category_store(Request $request)
    {
        # code...
        $valid = Validator::make($request->all(), ['name'=>'required', 'description'=>'required', 'image'=>'required|file']);
        if ($valid->fails()) {
            # code...
            session()->flash('error', $valid->errors()->first());
            return back()->withInput();
        }
        if(Category::where(['name'=>$request->name])->count() > 0){
            session()->flash('error', "Category already exists with the same name.");
            return back()->withInput();
        }
        
        $data = ['name'=>$request->name, 'description'=>$request->description, 'parent_id'=>$request->parent_id??null];
        if(($icon_file = $request->file('image')) != null){
            $path = asset('uploads/category_images');
            $fname = 'category_'.random_int(1000000, 9999999).'_'.time().'.'.$icon_file->getClientOriginalExtension();
            $icon_file->storeAs('category_images', $fname, ['disk'=>'public_uploads']);
            $data['image'] = $path.'/'.$fname;
        }
        $category = new Category($data);
        $category->save();
        return back()->with('success', 'Done');
    }

    public function category_update(Request $request, $id)
    {
        # code...
        $valid = Validator::make($request->all(), ['name'=>'required', 'description'=>'required']);
        if ($valid->fails()) {
            # code...
            session()->flash('error', $valid->errors()->first());
            return back()->withInput();
        }
        if(Category::where('id', '!=', $id)->where(['name'=>$request->name])->count() > 0){
            session()->flash('error', "A category with the same name already exist");
            return back()->withInput();
        }
        $category = Category::find($id);
        $data = ['name'=>$request->name, 'description'=>$request->description, 'parent_id'=>$request->parent_id];
        if(($icon_file = $request->file('image')) != null){
            $path = asset('uploads/category_images');
            $fname = 'category_'.random_int(1000000, 9999999).'_'.time().'.'.$icon_file->getClientOriginalExtension();
            $icon_file->storeAs('category_images', $fname, ['disk'=>'public_uploads']);
            $data['image'] = $path.'/'.$fname;
        }
        $category->update($data);
        return back()->with('success', 'Done');
    }

    public function _search(Request $request)
    {
        # code...
        // dd($request->all());
        $text = $request->search == null ? ' ' : $request->search;
        $category = $request->search_category == null ? null : Category::find($request->search_category);
        $town = $request->search_town == null ? null : Town::find($request->search_town);
        $string = ($text??'');
        $noisy_words = "a, an, the and, but, or, nor, for, yet, so, although, because, since, unless, while, if, when, whenever, whereas, as, after, before, until, once, though, even though, whether, as long as, as soon as, in order that, provided that, lest, as if, as though, than, both, either, neither, not only, but also, just as, rather than, so that, even if";
        $noise = explode(', ', $noisy_words);
        $tokens = array_filter(explode(' ', $string), function($el)use($noise){
            return strlen($el) > 0 and !in_array($el, $noise);
        });
        if(!($category == null and count($tokens) == 0)){

            $assets = Asset::join('asset_categories', ['asset_categories.asset_id'=>'assets.id'])
                ->where(function($query)use($town){
                    if($town != null){$query->where('assets.town_id', $town->id);}
                })
                ->join('categories', ['categories.id'=>"asset_categories.category_id"])
                ->where(function($query)use($category){
                    if($category != null){$query->where('categories.id', $category->id);}
                })->where(function($query)use($tokens){
                    if(count($tokens) > 0){
                        foreach ($tokens as $key => $tok) {
                            # code...
                            $query->where('assets.name', 'LIKE', '%'.$tok.'%')
                                ->where('assets.address', 'LIKE', '%'.$tok.'%')
                                ->where('assets.description', 'LIKE', '%'.$tok.'%');
                        }
                    }
                })->select(['assets.*', 'categories.id as category_id', 'categories.name as category_name'])->distinct()->get();
          
            $projects = Project::where(function($query)use($town){
                    if($town != null){$query->where('projects.town_id', $town->id);}
                })
                ->where(function($query)use($tokens){
                    if(count($tokens) > 0){
                        foreach ($tokens as $key => $tok) {
                            # code...
                            $query->where('projects.name', 'LIKE', '%'.$tok.'%')
                                ->where('projects.address', 'LIKE', '%'.$tok.'%')
                                ->where('projects.description', 'LIKE', '%'.$tok.'%');
                        }
                    }
                })->select(['projects.*'])->distinct()->get();
    
            $categories = Category::where(function($query)use($tokens){
                    if(count($tokens) > 0){
                        foreach ($tokens as $key => $tok) {
                            # code...
                            $query->where('categories.name', 'LIKE', '%'.$tok.'%')
                                ->where('categories.description', 'LIKE', '%'.$tok.'%');
                        }
                    }
                })->distinct()->get();

        }

        $data['title'] = (strlen(trim($text)) == 0 ? '' : "\"{$text}\";"). "Category: ".($category->name??'').", Town: ".($town->name??'');
        $data['_assets'] = $assets??collect();
        $data['_projects'] = $projects??collect();
        $data['_categories'] = $categories??collect();
        
        return view('showcase.search', $data);
    }

    public function subscribe(Request $request)
    {
        $validity = Validator::make($request->all(), ['email'=>'required|email']);
        if($validity->fails()){
            return back()->with('error', $validity->errors()->first());
        }
        if(MailingList::where('email', $request->email)->count() > 0){
            return back()->with('error', "Email ".$request->email." aready exists in our mailing list");
        }else{
            $instance = new MailingList(['email'=>$request->email]);
            $instance->save();
            return back()->with('success', 'Done');
        }
    }

    public function send_email(string $email_address, string $subject, $text_content)
    {
        # code...
        $data = ['email_address'=>$email_address, 'subject'=>$subject, 'text_content'=>$text_content];
        Mail::send('mails.notification', $data, function($message)use($email_address, $subject){
            $message->to($email_address, "PROPERTY TRUST GROUP CUSTOMER");
            $message->subject($subject);
        });
    }

    public function send_confirmation_email(string $email_address, string $subject, string $text_content, string $confirmation_url )
    {
        # code...
        $data = ['email_address'=>$email_address, 'subject'=>$subject, 'text_content'=>$text_content, 'confirmation_url'=>$confirmation_url];
        Mail::send((new Confirmation($data)));
    }

    public function random_project()
    {
        # code...
        $data = \App\Models\Project::inRandomOrder()->first();
        $data->_images = $data->images;
        return $data;
    }
}

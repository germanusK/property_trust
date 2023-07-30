<?php

namespace App\Http\Controllers;

use App\Mail\Confirmation;
use App\Models\Asset;
use App\Models\Category;
use App\Models\Grade;
use App\Models\MailingList;
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
        $assets = Asset::where('quantity', '>', 0)->orderBy('created_at', 'DESC')->take(12)->get();
    
        $data = ['assets'=>collect($assets)];
        return view('welcome', $data);
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


    // Grade management
    function grade_store(Request $request){
        $validator = Validator::make($request->all(), [
            'name'=>'required'
        ]);
        if ($validator->fails()) {
            # code...
            return back()->with('error', $validator->errors()->first());
        }
        $grade = new Grade($request->all());
        $grade->save();
        return back()->with('success', 'Done');
    }
    

    function grade_update(Request $request, $id){
        $valid = Validator::make($request->all(), [
            'name'=>'required'
        ]);
        if ($valid->fails()) {
            # code...
            return back()->with('error', $valid->errors()->first());
        }
        $grade = Grade::find($id);
        $grade->fill($request->all());
        $grade->save();
        return back()->with('success', 'Done');
    }


    function grade_delete($id){
        DB::table('grades')->delete($id);
        return back()->with('success', 'Done');
    }

    public function category_index()
    {
        # code...
        return view('dashboard.property.categories.index');
    }

    public function category_create()
    {
        # code...
        return view('dashboard.property.categories.create');
    }

    public function category_edit($id)
    {
        # code...
        $data['category'] = Category::find($id);
        return view('dashboard.property.categories.edit', $data);
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
        $valid = Validator::make($request->all(), ['name'=>'required']);
        if ($valid->fails()) {
            # code...
            return back()->with('error', $valid->errors()->first());
        }
        $category = new Category($request->all());
        $category->save();
        return back()->with('success', 'Done');
    }

    public function category_update(Request $request, $id)
    {
        # code...
        $valid = Validator::make($request->all(), ['name'=>'required']);
        if ($valid->fails()) {
            # code...
            return back()->with('error', $valid->errors()->first());
        }
        $category = Category::find($id);
        $category->fill($request->all());
        $category->save();
        return back()->with('success', 'Done');
    }

    public function grade_create()
    {
        # code...
        return view('dashboard.property.grades.create');
    }

    public function grade_edit(Request $request, $id)
    {
        # code...
        $data['grade'] = Grade::find($id);
        return view('dashboard.property.grades.edit', $data);
    }

    public function grade_index()
    {
        # code...
        return view('dashboard.property.grades.index');
    }

    public function _search(Request $request)
    {
        # code...
        $value = $request->search_value;
        $records = Asset::join('asset_categories', ['asset_categories.asset_id'=>'assets.id'])
                    ->join('categories', ['categories.id'=>'asset_categories.category_id'])
                    ->join('asset_grades', ['asset_grades.asset_id'=>'assets.id'])
                    ->join('grades', ['grades.id'=>'asset_grades.grade_id'])
                    ->where(function($q)use($value){
                        $q->where('assets.name', 'LIKE', '%'.$value.'%')
                        ->orWhere('assets.description', 'LIKE', '%'.$value.'%')
                        ->orWhere('categories.name', 'LIKE', '%'.$value.'%')
                        ->orWhere('grades.name', 'LIKE', '%'.$value.'%');
                    })->distinct()->limit(15)
                    ->get(['assets.*', 'categories.name as category', 'grades.name as grade']);
        
        return response()->json(['data'=>$records]);
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
}

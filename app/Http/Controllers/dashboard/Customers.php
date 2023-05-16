<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Customers extends Controller
{
    //
    public function index()
    {
        # code...
    }

    public function edit($id)
    {
        # code...
    }

    public function update($id, Request $request)
    {
        # code...
    }

    public function preview($id)
    {
        # code...
    }

    public function delete($id)
    {
        # code...
    }

    public function store(Request $request){
        $validate = Validator::make($request->all(), [
            'name'=>'required|min:2',
            'email'=>'required|email',
        ]);

        if ($validate->fails()) {
            # code...
            return $validate->errors();
        }
        $instance = new Customer();
        $instance->fill($request->all());
        if ($instance->save()) {
            # code...
            return $instance;
        }
        else{
            return response("Error registering user. Try again later.");
        }
    }

    // get all customer models
    function getAll(){
        return DB::table('customer')->get();
    }

    // get customer by id
    function getById(Request $request){
        return DB::table('customer')->find($request->id);
    }

    // get custom customer models
    function genericGet(Request $request){
        $query_params = $request->query;
        $querybuilder = DB::table('customer');
        foreach ($query_params as $key => $value) {
            # code...
            $querybuilder = $querybuilder->where($key, '=', $value);
        }
        return $querybuilder->get();
    } 

    function updateCustomer($id, Request $request)
    {
        # code...
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required'
        ]);
        if ($validator->fails()) {
            # code...
            return response($validator->errors(), 400);
        }

        $cst = new Customer();
        $cst = ['name'=>$request->name, 'email'=>$request->email, 'contact'=>$request->get('contact', null)];
        $cstm = DB::table('customer')->find($id);
        return $cstm->update($cst);
    }

    function deleteCustomer($id)
    {
        # code...
        return DB::table('customer')->delete($id);
    }
}

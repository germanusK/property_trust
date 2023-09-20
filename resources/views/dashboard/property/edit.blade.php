@extends('dashboard.main')
@section('content')
<?php 
    if (isset($_POST['submit'])) {
        # code...
        print_r($_POST);
    }
 ?>
<div class="w-full">
    <div class="w-full flex flex-wrap py-6 gap-4">
        <a type="button" href="{{url('/rest/property')}}" class="px-3 py-2 border-b border-white text-white rounded font-semibold"><span class="text-lg fas fa-arrow-left"></span></a>
    </div>
    <div class="flex align-middle items-center py-1 bg-slate-950 rounded">
        <h3 class=" mx-auto text-xl font-semibold text-white px-4">Create Property</h3>
    </div>
    <div class="w-full">
        <div id="imageBar" class="w-full items-center justify-center flex whitespace-nowrap overflow-x-scroll no-scrollbar my-2">
        </div>
        <div class="w-full items-center justify-center py-6">
            <form id="creationForm" enctype="multipart/form-data" method="post" class="rounded-md bg-slate-950 shadow-md py-10 px-6 w-4/5 sm:3/5 mx-auto border-x border-black border-opacity-30">
                @csrf
                <div class="w-full md:grid grid-cols-2 divide-x divide-slate-600">
                    <div class="col-span-1 px-4 py-2">
                        <div class="w-full my-2">
                            <label for="name" class="text-white text-opacity-50 text-base capitalize text-left">name:</label><br>
                            <input type="text" name="name" required id="" placeholder="item name here" value="{{$data->name}}" class="sm:w-2/3 flex-auto bg-white px-3 bg-opacity-10 rounded text-slate-950 text-opacity-60 placeholder-white placeholder-opacity-70 h-11">
                        </div>
                        <div class="w-full my-2">
                            <label for="price" class="text-white text-opacity-50 text-base capitalize text-left">price (CFA):</label><br>
                            <input type="number" required name="price" id="" placeholder="w-full item price here" value="{{$data->price}}" class="sm:w-2/3 flex-auto bg-white px-3 bg-opacity-10 rounded text-slate-950 text-opacity-60 placeholder-white placeholder-opacity-70 h-11">
                        </div>
                        <div class="w-full my-2">
                            <label for="description" class="text-white text-opacity-50 text-base capitalize text-left">description:</label><br>
                            <textarea rows="4" name="description" id="" placeholder="item description here" class="sm:w-2/3 flex-auto bg-white px-3 bg-opacity-10 rounded text-slate-950 text-opacity-60 placeholder-white placeholder-opacity-70">{{$data->description}}</textarea>
                        </div>
                    </div>
                    <div class="col-span-1 px-4 py-2">
                        <div class="w-full my-2">
                            <label for="images" class="text-white text-opacity-50 text-base capitalize">categories:</label><br>
                            <div class="flex flex-wrap justify-between bg-white px-3 bg-opacity-10 text-slate-950 text-opacity-60 rounded p-2 shadow-lg">
                                @foreach (\App\Models\Category::all() as $cat)
                                    <span class="px-1 mx-1 flex" style="font-size: 0.8rem;">
                                        <input type="checkbox" {{$data->categories->where('id', $cat->id)->count() > 0 ? 'checked' : ''}} value="{{$cat->id}}" name="categories[]" class="mr-1">
                                        <span class="lowercase">{{$cat->name}}</span>
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        <div class="w-full my-2">
                            <label for="images" class="text-white text-opacity-50 text-base capitalize">grades:</label><br>
                            <div class="flex flex-wrap justify-between bg-white px-3 bg-opacity-10 text-slate-950 text-opacity-60 rounded p-2 shadow-lg">
                                @foreach (\App\Models\Grade::all() as $grd)
                                    <span class="px-1 mx-1 flex" style="font-size: 0.8rem;">
                                        <input type="checkbox" {{$data->grades->where('id', $grd->id)->count() > 0 ? 'checked' : ''}} value="{{$grd->id}}" name="grades[]" class="mr-1">
                                        <span class="lowercase">{{$grd->name}}</span>
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="w-full items-end justify-end flex px-6">
                    <button id="creationBtn" type="submit" name="submit" class="px-3 py-2 border-b border-white text-white rounded font-semibold">update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
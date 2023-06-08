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
    <div class="flex align-middle items-center py-1 bg-white bg-opacity-20 rounded">
        <h3 class=" mx-auto text-xl font-semibold text-slate-700 px-4">Create Property</h3>
    </div>
    <div class="w-full">
        <div id="imageBar" class="w-full items-center justify-center flex whitespace-nowrap overflow-x-scroll no-scrollbar my-2">
        </div>
        <div class="w-full items-center justify-center py-6">
            <!-- <form action="{{ url('/rest/property/create') }}" enctype="multipart/form-data" method="post" class="rounded-md bg-white bg-opacity-10 py-10 px-6 w-4/5 sm:3/5 mx-auto border-x border-black border-opacity-30"> -->
            <form id="creationForm" action="" enctype="multipart/form-data" method="post" class="rounded-md bg-slate-200 shadow-md py-10 px-6 w-4/5 sm:3/5 mx-auto border-x border-black border-opacity-30">
                {{@csrf_field()}}
                <div class="w-full flex flex-wrap items-start justify-evenly">
                    <div class="w-full my-2 flex flex-wrap">
                        <label for="name" class="text-white text-opacity-50 text-base capitalize sm:w-1/3">name:</label><br>
                        <input type="text" name="name" required id="" placeholder="item name here" class="sm:w-2/3 flex-auto bg-black bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70 h-11">
                    </div>
                    <div class="w-full my-2 flex flex-wrap">
                        <label for="price" class="text-white text-opacity-50 text-base capitalize sm:w-1/3">price:</label><br>
                        <input type="number" required name="price" id="" placeholder="w-full item price here" class="sm:w-2/3 flex-auto bg-black bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70 h-11">
                    </div>
                    <div class="w-full my-2 flex flex-wrap">
                        <label for="description" class="text-white text-opacity-50 text-base capitalize sm:w-1/3">description:</label><br>
                        <textarea rows="4" name="description" id="" placeholder="item description here" class="sm:w-2/3 flex-auto bg-black bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70"></textarea>
                    </div>
                    <div class="w-full my-2 flex flex-wrap">
                        <label for="images" class="text-white text-opacity-50 text-base capitalize sm:w-1/3">images:</label><br>
                        <input type="file" required multiple name="images[]" id="" placeholder="images here" class="sm:w-2/3 flex-auto bg-black bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70 h-11 py-2">
                    </div>
                    <div class="w-full my-2 flex flex-wrap">
                        <label for="images" class="text-white text-opacity-50 text-base capitalize sm:w-1/3">categories:</label><br>
                        <div class="sm:w-2/3 flex-auto text-white text-opacity-60 rounded p-2 shadow-lg">
                            @foreach (\App\Models\Category::all() as $cat)
                                <span class="rounded py-1 px-2 mb-3 mx-1 inline-flex">
                                    <input type="checkbox" value="{{$cat->id}}" name="categories[]" class="mr-1">
                                    <span>{{$cat->name}}</span>
                                </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="w-full my-2 flex flex-wrap">
                        <label for="images" class="text-white text-opacity-50 text-base capitalize sm:w-1/3">grades:</label><br>
                        <div class="sm:w-2/3 flex-auto text-white text-opacity-60 rounded p-2 shadow-lg">
                            @foreach (\App\Models\Grade::all() as $grd)
                                <span class="rounded py-1 px-2 mb-3 mx-1 inline-flex">
                                    <input type="checkbox" value="{{$grd->id}}" name="grades[]" class="mr-1">
                                    <span>{{$grd->name}}</span>
                                </span>
                            @endforeach
                        </div>
                    </div>
                    
                </div>
                <hr class=" opacity-30 w-2/3 mx-auto">
                <div class="w-full items-end justify-end flex px-6">
                    <button id="creationBtn" type="submit" name="submit" class="px-3 py-2 border-b border-white text-white rounded font-semibold">create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
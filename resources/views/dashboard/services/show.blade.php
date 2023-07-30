@extends('dashboard.main')
@section('content')
    <?php 
        if (isset($_POST['submit'])) {
            # code...
            print_r($_POST);
        }
    ?>
    <div class="w-full">
        <div class="w-full flex justify-between flex-wrap py-6 gap-4">
            <a type="button" href="{{route('rest.services.index')}}" class="px-3 py-2 border-b border-white text-white rounded font-semibold"><span class="text-sm fas fa-arrow-left"></span></a>
            <a href="{{route('rest.projects.create', $service->id)}}" class="px-3 py-2 border-b border-white text-white rounded font-semibold lowercase"><span class="text-base" style="font-family:sans !important; ">new project</span></a>
            <a href="{{route('rest.projects.index', $service->id)}}" class="px-3 py-2 border-b border-white text-white rounded font-semibold lowercase"><span class="text-base" style="font-family:sans !important; ">projects</span></a>
            <a href="{{route('rest.services.images', $service->id)}}" class="px-3 py-2 border-b border-white text-white rounded font-semibold lowercase"><span class="text-base" style="font-family:sans !important; ">images</span></a>
        </div>
        <div class="w-full">
            <div id="imageBar" class="w-full items-center justify-center flex whitespace-nowrap overflow-x-scroll no-scrollbar my-2">
            </div>
            <div class="w-full items-center justify-center py-6">
                <div id="creationForm" class="rounded-md bg-slate-950 shadow-md py-10 px-6 w-4/5 sm:3/5 mx-auto border-x border-black border-opacity-30">
                    <div class="w-full md:grid grid-cols-2 divide-x divide-slate-600">


                        <div class="col-span-1 px-4 py-2 text-white text-opacity-60">
                            <div class="w-full mx-auto my-2">
                                <img src="{{$service->icon_path}}" width="120" height="130" class="rounded-md border border-slate-400 mx-auto" />
                            </div>
                            <div class="w-full my-2">
                                <label for="name" class="text-white text-opacity-50 font-bold text-base capitalize text-left">{{$service->name}}</label>
                            </div>
                        </div>


                        <div class="col-span-1 px-4 py-2 text-white text-opacity-60 gap-y-8">
                            <div class="w-full my-2">
                                <label for="contact" class="text-white text-opacity-50 text-base capitalize text-left">{{$service->contact}}</label>
                            </div>
                            <div class="w-full my-2">
                                <label for="email" class="text-white text-opacity-50 text-base text-left">{{$service->email}}</label>
                            </div>
                            <div class="w-full my-2">
                                <label for="address" class="whitespace-pre-wrap text-white text-opacity-50 text-base text-left">{{$service->address}}</label>
                            </div class="w-full my-2">
                                <label for="description" class="w-full whitespace-pre-wrap text-white text-opacity-50 text-base text-left">{{$service->description}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
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
            <a type="button" href="{{route('rest.projects.index')}}" class="px-3 py-2 border-b border-white text-white rounded font-semibold"><span class="text-lg fas fa-arrow-left"></span></a>
        </div>
        <div class="w-full">
            <div id="imageBar" class="w-full items-center justify-center flex whitespace-nowrap overflow-x-scroll no-scrollbar my-2">
            </div>
            <div class="w-full items-center justify-center py-6">
                <div id="creationForm" class="rounded-md bg-slate-950 shadow-md py-10 px-6 w-4/5 sm:3/5 mx-auto border-x border-black border-opacity-30">
                    @csrf
                    <div class="w-full md:grid grid-cols-2 divide-x divide-slate-600">


                        <div class="col-span-1 px-4 py-2 divide-y divide-slate-500">
                            <div class="w-full sm:w-2/3 mx-auto my-2">
                                <img src="" width="120" height="130" class="rounded-md border border-slate-400" />
                            </div>
                            <div class="w-full my-2">
                                <label for="name" class="text-white text-opacity-50 text-base capitalize text-left">name:</label><br>
                                <div class="sm:w-2/3 flex-auto bg-white px-3 bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70 h-11">{{$project->name}}</div>
                            </div>
                            <div class="w-full my-2">
                                <label for="contact" class="text-white text-opacity-50 text-base capitalize text-left">contact:</label><br>
                                <div class="sm:w-2/3 flex-auto bg-white px-3 bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70 h-11">{{$project->contact}}</div>
                            </div>
                        </div>


                        <div class="col-span-1 px-4 py-2 divide-y divide-slate-500">
                            <div class="w-full my-2">
                                <label for="email" class="text-white text-opacity-50 text-base capitalize text-left">email:</label><br>
                                <div class="sm:w-2/3 flex-auto bg-white px-3 bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70 h-11">{{$project->email}}</div>
                            </div>
                            <div class="w-full my-2">
                                <label for="address" class="text-white text-opacity-50 text-base capitalize text-left">address:</label><br>
                                <div class="sm:w-2/3 flex-auto bg-white px-3 bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70 h-11">{{$project->address}}</div>
                            </div>
                                <label for="description" class="text-white text-opacity-50 text-base capitalize text-left">description:</label><br>
                                <div class="sm:w-2/3 flex-auto bg-white px-3 bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70">{{$project->description}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('dashboard.main')
@section('content')
<div class="w-full">
    <div class="w-full flex flex-wrap py-6 gap-4">
        <a type="button" href="{{route('rest.grades.index')}}" class="px-3 py-2 border-b border-white text-white rounded font-semibold"><span class="text-lg fas fa-arrow-left"></span></a>
    </div>
    <div class="w-full">
        <div id="imageBar" class="w-full items-center justify-center flex blue-900space-nowrap overflow-x-scroll no-scrollbar my-2">
        </div>
        <div class="w-full items-center justify-center py-6">
            <form id="creationForm" enctype="multipart/form-data" method="post" class="rounded-md bg-slate-950 shadow-md py-10 px-6 w-4/5 sm:3/5 mx-auto border-x border-white border-opacity-30">
                {{@csrf_field()}}
                <div class="flex align-middle items-center py-1 ">
                    <h3 class=" mx-auto text-xl font-semibold text-slate-200 px-4">Edit Grade</h3>
                </div>
                <div class="w-full flex flex-wrap items-start justify-evenly">
                    <div class="w-full md:w-4/5 mx-auto my-2">
                        <label for="name" class="text-slate-200 text-opacity-50 text-base capitalize">name:</label><br>
                        <input type="text" name="name" value="{{$grade->name}}" required id="" placeholder="item name here" class="px-3 w-full bg-white bg-opacity-10 rounded text-slate-200 text-opacity-60 placeholder-slate-100 h-11">
                    </div>
                    
                    <div class="w-full md:w-4/5 mx-auto my-2">
                        <label for="description" class="text-slate-200 text-opacity-50 text-base capitalize">description:</label><br>
                        <textarea rows="4" name="description" id="" placeholder="item description here" class="px-3 w-full bg-white bg-opacity-10 rounded text-slate-200 text-opacity-60 placeholder-slate-100 placeholder-opacity-70">
                            {{$grade->description}}
                        </textarea>
                    </div>               
                </div>
                <div class="w-full md:w-4/5 mx-auto px-6">
                    <button id="creationBtn" type="submit" name="submit" class="px-3 py-2 border-b border-blue-900 text-blue-900 rounded font-semibold">update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
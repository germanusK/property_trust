@extends('dashboard.main')
@section('content')
<div class="w-full">
    <div class="w-full flex flex-wrap py-6 gap-4">
        <a type="button" href="{{url('/rest/property')}}" class="px-3 py-2 border-b border-white text-slate-400 rounded font-semibold"><span class="text-lg fas fa-arrow-left"></span></a>
    </div>
    <div class="w-full">
        <div id="imageBar" class="w-full items-center justify-center flex whitespace-nowrap overflow-x-scroll no-scrollbar my-2">
        </div>
        <div class="w-full items-center justify-center py-6">
            <form id="creationForm" enctype="multipart/form-data" method="post" class="rounded-md bg-slate-950 shadow-md py-10 px-6 w-4/5 mx-auto border-x border-black border-opacity-30">
                <div class="flex align-middle items-center pb-5 bg-opacity-20 rounded">
                    <h3 class=" mx-auto text-xl font-semibold text-slate-200 px-4">Create Category</h3>
                </div>
                @csrf
                <div class="w-2/3 mx-auto">
                    <div class="w-full my-2">
                        <label for="name" class="text-slate-400 text-base capitalize">name:</label><br>
                        <input type="text" name="name" required id="" placeholder="item name here" class="border bg-white bg-opacity-10 rounded text-slate-400 px-3 placeholder-white placeholder-opacity-70 w-full h-11">
                    </div>
                    
                    <div class="w-full my-2">
                        <label for="description" class="text-slate-400 text-base capitalize">description:</label><br>
                        <textarea rows="4" name="description" id="" placeholder="item description here" class="border bg-white bg-opacity-10 rounded text-slate-400 px-3 placeholder-white placeholder-opacity-70 w-full"></textarea>
                    </div>               
                </div>
                <hr class=" opacity-30 w-2/3 mx-auto">
                <div class="w-full items-end justify-end flex px-6">
                    <button id="creationBtn" type="submit" name="submit" class="px-3 py-2 border-b border-white text-slate-300 rounded font-semibold">create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
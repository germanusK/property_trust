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
        <h3 class=" mx-auto text-xl font-semibold text-slate-200 px-4">Categories</h3>
    </div>
    <div class="w-full">
        <div id="imageBar" class="w-full items-center justify-center flex whitespace-nowrap overflow-x-scroll no-scrollbar my-2">
        </div>
        <div class="w-full items-center justify-center py-6">
            <!-- <form action="{{ url('/rest/property/create') }}" enctype="multipart/form-data" method="post" class="rounded-md bg-white bg-opacity-10 py-10 px-6 w-4/5 sm:3/5 mx-auto border-x border-black border-opacity-30"> -->
            <table class="my-3 bg-opacity-70">
                <thead class="bg-slate-600 text-slate-50 border-b-slate-50 capitalize">
                    <th class="border-l-slate-50 border-r-slate-50">###</th>
                    <th class="border-l-slate-50 border-r-slate-50">name</th>
                    <th class="border-l-slate-50 border-r-slate-50">namedescription</th>
                    <th class="border-l-slate-50 border-r-slate-50"></th>
                </thead>
                <tbody class="bg-slate-50 text-slate-900">
                    @php($k = 1)
                    @foreach (\App\Models\Category::all() as $cat)
                        <tr class="border-b border-b-slate-50">
                            <td class="border-l-slate-50 border-r-slate-50">{{$k++}}</td>
                            <td class="border-l-slate-50 border-r-slate-50">{{$cat->name}}</td>
                            <td class="border-l-slate-50 border-r-slate-50">{{$cat->description ?? ''}}</td>
                            <td class="border-l-slate-50 border-r-slate-50">
                                <a href="{{route('rest.categories.edit', [$cat->id])}}" class="px-3 py-1 mx-1 rounded border-slate-900 bg-white">edit</a>
                                <a href="{{route('rest.categories.delete', [$cat->id])}}" class="px-3 py-1 mx-1 rounded border-red-400 bg-white">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
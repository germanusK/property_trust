@extends('dashboard.main')
@section('content')
    <div class="w-full h-full py-2">
       
        <div class="w-full shadow-inner shadow-slate-600 bg-slate-700 rounded items-end justify-end flex flex-wrap py-2 px-3 gap-4">
            <a href="{{route('rest.categories.create')}}" id="newCategoryBtn" class="px-3 border-b border-white rounded font-black"><span class=" text-xs text-white fas fa-plus"> category</span></a>
            <a href="{{route('rest.grades.create')}}" id="newGradeBtn" class="px-3 border-b border-white rounded font-black"><span class="text-xs text-white fas fa-plus"> grade</span></a>
            <a href="{{url('/rest/property/create')}}" class="px-3 border-b border-white rounded font-black"><span class="text-xs text-white fas fa-plus"> asset</span></a>
            <div class="flex w-1/4 align-middle items-center py-1 bg-black bg-opacity-20 rounded">
                <label for="group" class="px-2 mr-2 text-sm text-slate-100">filter<span class="fas fa-filter">:</span></label>
                <select name="filterOption" onchange="filterList()" class="flex rounded  bg-opacity-10 w-2/3" id="propertyFilter">
                    <option value="all">---</option>
                    @foreach (\App\Models\Category::all() as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="w-full justify-center items-center flex py-6"></div>
        
        <!-- property list -->
        <div class="h-96 w-full mb-3 overflow-y-scroll no-scrollbar">
            <!-- property item -->
            <table class="w-full">
                <thead class="bg-white bg-opacity-10 py-3 shadow-inner">
                    <tr class="py-1 border-y divide-x text-white divide-slate-700">
                        <th class="font-bold capitalize">s/n</th>
                        <th class="font-bold capitalize">Name</th>
                        <th class="font-bold capitalize text-orange-400">Price</th>
                        <th class="font-bold capitalize">Description</th>
                        <th class="font-bold capitalize text-red-400">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php($k = 1)
                    @forelse(\App\Models\Asset::all() as $value)
                    <tr class="py-2 border-y mb-1 bg-slate-700 bg-opacity-20 border-cyan-700 text-slate-200 divide-x divide-slate-600">
                        <td class="text-base px-2 capitalize">{{$k++}}</td>
                        <td class="text-base px-2">{{$value->name}}</td>
                        <td class="text-base px-2 text-orange-400">{{$value->price}} </td>
                        <td class="text-base px-2  whitespace-pre-wrap">{{$value->description}} </td>
                        <td class="text-base px-2 flex">
                            <a href=" {{ url('/rest/property/preview/'.$value['id']) }} "><span title="preview" class="text-base text-slate-100 mx-2 fas fa-eye"></span></a>
                            <a href=" {{ url('/rest/property/edit/'.$value['id'])}} "><span title="edit" class="text-base text-sky-300 mx-2 fas fa-edit"></span></a>
                            <form action=" {{url('/rest/property/delete/'.$value['id'])}} " method="post">{{ csrf_field() }}<button type="submit"><span title="delete" class="text-base text-red-400 mx-2 fas fa-trash"></span></button></form>
                        </td>
                    </tr>
                    @empty
                    <div class="w-full break-words py-1 text-center mt-4 border-y text-slate-100 border-slate-100 align-middle items-stretch justify-between text-xl">
                        No Data available yet. Consider creating some property
                    </div> 
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
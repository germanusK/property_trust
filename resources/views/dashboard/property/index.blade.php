@extends('dashboard.main')
@section('content')
    <div class="w-full h-full py-2">
       
        <div class="w-full items-end justify-end flex flex-wrap py-1 gap-4">
            <a type="button" href="{{route('rest.categories.create')}}" id="newCategoryBtn" class="px-3 py-2 border-b border-black text-black rounded font-semibold"><span class="text-lg fas fa-plus"> category</span></a>
            <a type="button" href="{{route('rest.grades.create')}}" id="newGradeBtn" class="px-3 py-2 border-b border-black text-black rounded font-semibold"><span class="text-lg fas fa-plus"> grade</span></a>
            <a type="button" href="{{url('/rest/property/create')}}" class="px-3 py-2 border-b border-black text-black rounded font-semibold"><span class="text-lg fas fa-plus"> asset</span></a>
            <div class="flex w-1/4 align-middle items-center py-1 bg-black bg-opacity-20 rounded">
                <label for="group" class="px-2 mr-2 text-sm text-slate-500">filter<span class="fas fa-filter">:</span></label>
                <select name="filterOption" onchange="filterList()" class="flex rounded  bg-opacity-10 w-2/3 text-center" id="propertyFilter">
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
                <thead>
                    <tr class="py-1 mt-4 border-y  border-slate-100">
                        <th class="font-bold  border-l-slate-50 border-l capitalize">s/n</th>
                        <th class="font-bold  border-l-slate-50 border-l capitalize">Name</th>
                        <th class="font-bold  border-l-slate-50 border-l capitalize">Price</th>
                        <th class="text font-bold  border-l-slate-50 border-l ">Description</th>
                        <th class="font-bold  border-l-slate-50 border-l ">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php($k = 1)
                    @forelse(\App\Models\Asset::all() as $value)
                    <tr class="py-1 border-y mb-1 border-white border-opacity-10">
                        <td class=" border-l border-l-stone-400 border-dottedtext-base font-semibold text-slate-200 capitalize">{{$k++}}</td>
                        <td class=" border-l border-l-stone-400 border-dottedtext-base text-slate-200">{{$value->name}}</td>
                        <td class=" border-l border-l-stone-400 border-dottedtext-base text-slate-200">{{$value->price}} </td>
                        <td class=" border-l border-l-stone-400 border-dottedtext-base text-slate-200">{{$value->description}} </td>
                        <td class=" border-l border-l-stone-400 border-dottedtext-base text-slate-200">
                            <a href=" {{ url('/rest/property/preview/'.$value['id']) }} "><span title="preview" class="text-base text-black mx-2 fas fa-eye"></span></a>
                            <a href=" {{ url('/rest/property/edit/'.$value['id'])}} "><span title="edit" class="text-base text-black mx-2 fas fa-edit"></span></a>
                            <form action=" {{url('/rest/property/delete/'.$value['id'])}} " method="post">{{ csrf_field() }}<button type="submit"><span title="delete" class="text-base text-black mx-2 fas fa-trash"></span></button></form>
                        </td>
                    </tr>
                    @empty
                    <div class="flex w-full break-words py-1 text-center mt-4 border-y text-slate-100 border-slate-100 align-middle items-stretch justify-between text-xl">
                        No Data available yet. Consider uploading some property
                    </div> 
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
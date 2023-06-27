@extends('dashboard.main')
@section('content')
    <div class="w-full h-full py-2">
       
        <div class="w-full justify-center items-center flex py-6"></div>
        
        <!-- property list -->
        <div class="h-96 w-full mb-3 overflow-y-scroll no-scrollbar">
            <!-- property item -->
            <table class="w-full">
                <thead class="bg-white bg-opacity-10 py-3 shadow-inner">
                    <tr class="py-1 border-y divide-x text-white divide-slate-700">
                        <th class="font-bold capitalize">s/n</th>
                        <th class="font-bold capitalize">Name</th>
                        <th class="font-bold capitalize text-orange-400">Contact</th>
                        <th class="font-bold capitalize">Description</th>
                        <th class="font-bold capitalize text-red-400">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php($k = 1)
                    @forelse(\App\Models\Service::all() as $value)
                    <tr class="py-2 border-y mb-1 bg-slate-700 bg-opacity-20 border-cyan-700 text-slate-200 divide-x divide-slate-600">
                        <td class="text-base px-2 capitalize">{{$k++}}</td>
                        <td class="text-base px-2 whitespace-pre-wrap">{{$value->name}}</td>
                        <td class="text-base px-2 whitespace-pre-wrap text-orange-400">{{$value->contact}} | {{$value->email}}</td>
                        <td class="text-base px-2 whitespace-pre-wrap">{{$value->description}} </td>
                        <td class="text-base px-2 flex">
                            <a href=" {{ route('rest.services.show', $value['id']) }} "><span title="preview" class="text-base text-slate-100 mx-2 fas fa-eye"></span></a>
                            <a href=" {{ route('rest.services.edit', $value['id'])}} "><span title="edit" class="text-base text-sky-300 mx-2 fas fa-edit"></span></a>
                            <form action=" {{route('rest.services.delete', $value['id'])}} " method="post">{{ csrf_field() }}<button type="submit"><span title="delete" class="text-base text-red-400 mx-2 fas fa-trash"></span></button></form>
                        </td>
                    </tr>
                    @empty
                    <div class="w-full break-words py-1 text-center mt-4 border-y text-slate-100 border-slate-100 align-middle items-stretch justify-between text-xl">
                        No Data available yet. Consider creating some services
                    </div> 
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
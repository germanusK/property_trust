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
                        <th class="font-bold capitalize bg-white bg-opacity-20 p-2">Image</th>
                        <th class="font-bold capitalize">Product/Service</th>
                        <th class="font-bold capitalize">Customer</th>
                        <th class="font-bold capitalize text-orange-400 ">Due Date</th>
                        <th class="font-bold capitalize text-red-400">Status</th>
                        <th class="font-bold capitalize">Actions</th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    @php($k = 1)
                    @forelse($schedules as $value)
                    <tr class="py-2 border-y mb-1 max-w-full bg-slate-700 bg-opacity-20 border-cyan-700 text-slate-200 divide-x divide-slate-600">
                        <td class="text-base px-2 capitalize">{{$k++}}</td>
                        <td class="text-base px-2 bg-white bg-opacity-20 p-2">
                            <img class="h-12 w-12 rounded-sm border border-blue-100" src="">
                        </td>
                        <td class="text-base px-2">{{$value->property->name??null}}</td>
                        <td class="text-base px-2">{{$value->customer->name??null}}</td>
                        <td class="text-base px-2 text-orange-400">{{$value->due_date??''}} </td>
                        <td class="text-base px-2 text-red-400">{{$value->status??''}} </td>
                        <td class="text-base px-2 whitespace-nowrap ">
                            <a href=" {{ route('rest.schedules.show', $value['id']) }} "><span title="preview" class="text-base text-slate-100 mx-2 fas fa-eye"></span></a>
                            <a href=" {{ route('rest.schedules.edit', $value['id'])}} "><span title="edit" class="text-base text-sky-300 mx-2 fas fa-edit"></span></a>
                            <form action=" {{route('rest.schedules.delete', $value['id'])}} " method="post">{{ csrf_field() }}<button type="submit"><span title="delete" class="text-base text-red-400 mx-2 fas fa-trash"></span></button></form>
                        </td>
                    </tr>
                    @empty
                    <div class="w-full break-words py-1 text-center mt-4 border-y text-slate-100 border-slate-100 align-middle items-stretch justify-between text-xl">
                        No Data available yet. Consider creating some projects
                    </div> 
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
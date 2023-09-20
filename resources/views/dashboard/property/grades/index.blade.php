@extends('dashboard.main')
@section('content')

<div class="w-full">
    <div class="w-full flex flex-wrap py-6 gap-4">
        <a type="button" href="{{url('/rest/property')}}" class="px-3 py-2 border-b border-white text-white rounded font-semibold"><span class="text-lg fas fa-arrow-left"></span></a>
    </div>
    <div class="flex align-middle items-center py-1 bg-slate-950 bg-opacity-20 rounded">
        <h3 class=" mx-auto text-xl font-semibold text-slate-200 px-4">Grades</h3>
    </div>
    <div class="w-full">
        <div id="imageBar" class="w-full items-center justify-center flex whitespace-nowrap overflow-x-scroll no-scrollbar my-2">
        </div>
        <div class="h-96 w-full mb-3 overflow-y-scroll no-scrollbar">
            <!-- property item -->
            <table class="w-full">
                <thead class="bg-white bg-opacity-10 py-3 shadow-inner">
                    <tr class="py-1 border-y divide-x text-blue-950 divide-slate-700">
                        <th class="font-bold capitalize">s/n</th>
                        <th class="font-bold capitalize">Name</th>
                        <th class="font-bold capitalize">rank</th>
                        <th class="font-bold capitalize text-red-400">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php($k = 1)
                    @forelse(\App\Models\Grade::all() as $value)
                    <tr class="py-2 border-y mb-1 bg-slate-700 bg-opacity-20 border-cyan-700 text-slate-200 divide-x divide-slate-600">
                        <td class="text-base px-2 capitalize">{{$k++}}</td>
                        <td class="text-base px-2">{{$value->name}}</td>
                        <td class="text-base px-2">{{$value->rank}} </td>
                        <td class="text-base px-2 flex">
                            <a href=" {{ route('rest.grades.edit', $value['id'])}} "><span title="edit" class="text-base text-sky-300 mx-2 fas fa-edit"></span></a>
                            <form action=" {{url('rest.grades.delete', $value['id'])}} " method="post">{{ csrf_field() }}<button type="submit"><span title="delete" class="text-base text-red-400 mx-2 fas fa-trash"></span></button></form>
                        </td>
                    </tr>
                    @empty
                    <div class="flex w-full break-words py-1 text-center mt-4 border-y text-slate-100 border-slate-100 align-middle items-stretch justify-between text-xl">
                        No grades available yet. Consider adding some grades
                    </div> 
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@extends('dashboard.main')
@section('content')
<div class="w-full h-full py-4 flex flex-col">
    <div class="w-full py-2 px-4 flex items-end justify-end">
        <a href="{{url('/rest/property')}}" ><span class="text-black text-xl font-bold fas fa-times hover:text-red-400" title="close"></span></a>
    </div>
    <div class="flex-auto w-full flex items-center justify-center align-middle py-8">
        <div class="w-full md:grid grid-cols-5 py-5 shadow-lg">
            <div class="col-span-5 text-center pb-4 font-semibold text-blue-900 capitalize text-xl">{{$data->name}}</div>
            <div class="px-4 col-span-3 flex whitespace-nowrap overflow-x-scroll no-scrollbar items-center justify-center py-2 bg-opacity-20">
                @foreach($data->images as $image)
                    <img src="{{asset($image->url)}}" alt="" class="w-auto max-w-screen rounded-xl md:h-72 mx-3 my-2 border-x border-gray-800">
                @endforeach
            </div>
            <div class="px-1 col-span-2 mx-1 py-2 md:h-full flex flex-col justify-center mb-4 overflow-y-scroll no-scrollbar divide-y divide-blue-100">
                <div class="py-2 flex flex-wrap "><span class="text-base text-slate-500 sm:w-1/3 capitalize">name</span><span class="sm:w-1/2 block font-semibold text-blue-900 pl-2">{{ $data->name}}</span></div>
                <div class="py-2 flex flex-wrap "><span class="text-base text-slate-500 sm:w-1/3 capitalize">quantity</span><span class="sm:w-1/2 block font-semibold text-blue-900 pl-2">{{ $data->quantity}}</span></div>
                <div class="py-2 flex flex-wrap "><span class="text-base text-slate-500 sm:w-1/3 capitalize">price</span><span class="sm:w-1/2 block font-semibold text-blue-900 pl-2">{{ $data->price}}</span></div>
                <div class="py-2 flex flex-wrap "><span class="text-base text-slate-500 sm:w-1/3 capitalize">description</span><span class="sm:w-1/2 block font-semibold text-blue-900 pl-2">{{ $data->description}}</span></div>
            </div>
        </div>
    </div>
</div>
@endsection
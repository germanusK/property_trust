@extends('dashboard.main')
@section('content')
    <div class="w-5/6 mx-auto my-6 rounded-md bg-slate-950 border border-white border-opacity-30 py-4 px-3">
        <div class="w-full sm:w-2/3 md:w-1/2 mx-auto my-2 rounded-md bg-white bg-opacity-20">
            <img class="w-full h-auto rounded" src="{{ $schedule->property->images->first() ?? asset('asset_images/_1675758705_137007.jpg') }}">
        </div>
        {{-- <hr class="border border-white border-opacity-30 my-1"> --}}
        <div class="md:gird lg:grid xl:grid grid-cols-2 pt-4">
            <div class="p-2 col-span-1 divide-y divide-white divide-opacity-10 gap-y-2 text-white text-opacity-80">
                <div class="text-xl font-bold text-white">{{ $schedule->property->name }}</div>
                <div class="text-lg">{!! $schedule->property->description !!}</div>
            </div>
            <div class="p-2 col-span-1 divide-y divide-white divide-opacity-10 gap-y-2 text-white text-opacity-80 bg-slate-400 bg-opacity-20 rounded">
                <div class="text-base font-serif text-blue-400">SCHEDULED FOR : {{ $schedule->due_date }}</div>
                <div class="text-xl font-bold text-white">{{ $schedule->customer->name }}</div>
                <div class="text-lg">{{ $schedule->customer->email }} | {{ $schedule->customer->contact }}</div>
                <div class="text-md">
                    <a href="#" class="bg-white bg-opacity-20 rounded ring-1 ring-slate-400 py-1 px-3 block w-fit mx-auto my-2"><span class="font-semibold text-blue-500 fa fa-history mx-2"></span>schedule history for this user</a>
                    <a href="#" class="bg-white bg-opacity-20 rounded ring-1 ring-slate-400 py-1 px-3 block w-fit mx-auto my-2"><span class="font-semibold text-blue-500 fa fa-history mx-2"></span>all schedules for this property</a>
                </div>
            </div>
        </div>
    </div>
@endsection
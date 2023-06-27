<x-head></x-head>
<body>
    <div class="w-full">
        <x-header-alt/>
        <div class="w-full mx-auto">
                    

            <div class="flex justify-center text-center text-base font-semibold my-6">
                <span><a class="text-blue-900" href="{{url('/')}}">Home</a> : <span class="text-blue-600">Our Services</span></span>
            </div>
            <!-- SERVICES -->
            <div class="w-11/12 md:w-5/6 h-auto mb-16 mt-10 rounded-xl mx-auto">

                <div class="w-full flex flex-wrap items-baseline align-middle justify-center py-8 px-4 bg-white">
                    @foreach (\App\Models\Service::all() as $service)
                    <div class="xs:w-full sm:w-1/2 md:w-1/3 lg:w-1/4 h-fit py-3 px-2">
                        <div class="rounded shadow-lg h-auto py-5 px-2 w-full border border-slate-50 hover:border-slate-900 text-center">
                            <div class="rounded-full w-24 h-28 mt-3 mx-auto">
                            @if ($service->icon_path != null)
                                <img class="h-16 w-12 rounded" src="{{ $service->icon_path }}">
                            @else
                                <span class=" text-6xl text-blue-700 fas fa-cocktail"></span>
                            @endif
                            </div>
                            <div class="h-3/5 w-full pb-5">
                                <div class="font-semibold py-4 text-xl text-blue-800 text-center text-ellipsis line-clamp-2">
                                    {{ $service->name }}
                                </div>
                                <div class="text-lg text-slate-600 text-center line-clamp-3 mb-7">{{ $service->description }}</div>
                                <a class="px-8 py-3 rounded-full bg-blue-900 text-white" href="{{ route('public.services.details', [$service->id]) }}">more info</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- END OF SERVICES -->


        </div>
        <div class="w-full h-auto bg-blue-900">
            <x-footer></x-footer>
        </div>
    </div>
</body>
</html>
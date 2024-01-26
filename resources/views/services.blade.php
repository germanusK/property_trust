<x-head></x-head>
<body>
    <div class="w-full">
        <x-header-alt/>
        <div class="w-full mx-auto">
                    

            <div class="flex justify-center text-center text-base font-semibold my-6">
                <span><a class="text-blue-900" href="{{url('/')}}">Home</a> : <span class="text-blue-600">Our Services</span></span>
            </div>
            <!-- SERVICES -->
            <div class="w-11/12 md:w-5/6 overflow-x-scroll whitespace-nowrap md:whitespace-normal no-scrollbar h-fit my-8 mx-auto">

                <div class="flex md:flex-wrap py-8 px-4 bg-white">
                    @foreach (\App\Models\Service::all() as $service)
                    <div class="w-80 max-w-full py-2 px-2 my-3 mx-2 min-h-min whitespace-normal rounded shadow-lg" style="min-width: 18rem;">
                        <div class=" h-full pb-5 w-full border border-slate-50 hover:border-slate-900 text-center">
                            <div class="rounded-full w-full h-40 mx-auto">
                                <img class="h-full w-full rounded-t mx-auto" src="{{ $service->img_path }}">
                            </div>
                            <div class="h-3/5 w-full pb-5 px-3">
                                <div class="font-semibold py-4 text-xl text-blue-800 text-center text-ellipsis line-clamp-2">
                                    {{ $service->name }}
                                </div>
                                <div class="text-lg text-slate-600 text-center line-clamp-3 mb-7">{{ $service->description }}</div>
                                <a class="px-8 py-3 rounded-full bg-blue-900 text-white uppercase" href="{{ route('public.services.details', [$service->id]) }}">details</a>
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
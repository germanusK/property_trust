<x-head></x-head>
<body>
    <div class="w-full">
        <x-header-alt/>
        <div class="w-full mx-auto">
            <div class="flex justify-center text-center text-base font-semibold my-6">
                <span><a class="text-blue-900" href="{{url('/')}}">Home</a> :: <a class="text-blue-900" href="{{URL::previous()}}">Services</a> :: <span class="text-blue-600">Details</span></span>
            </div>
            <div class="py-4 my-14  md:grid lg:grid grid-cols-3 bg-slate-100 shadow-2xl shadow-slate-900">
                <div class="col-span-2 px-6 flex flex-col justify-center">
                    <img class="w-full h-auto" src="{{ $service->icon_path ?? asset('asset_images/_1676749992_484911.jpg') }}">
                </div>
                <div class="col-span-1 px-7 bg-slate-950 border border-gray-400 border-opacity-40 py-14">
                    <span class="font-semibold text-2xl capitalize block w-full text-center text-white text-opacity-80 py-2">{{ $service->name }}</span>
                    <span class="text-blue-300 text-opacity-50 block text-center">{{ $service->contact }} ::: {{ $service->email }}</span>
                    <span class="text-lg text-white text-opacity-70 py-4 block text-justify">{{ $service->description }}</span>
                    <div class="py-8 px-6 my-4 block bg-white bg-opacity-10 rounded">
                        <form method="POST">
                            <div class="my-2">
                                <label class="text-blue-200 text-opacity-70 block">Name</label>
                                <input type="text" name="name" class="w-full h-9 rounded-sm border border-opacity-30 border-slate-100 bg-slate-950 bg-opacity-70 text-white" required>
                            </div>
                            <div class="my-2">
                                <label class="text-blue-200 text-opacity-70">Email</label>
                                <input type="email" name="email" class="w-full h-9 rounded-sm border border-opacity-30 border-slate-100 bg-slate-950 bg-opacity-70 text-white" required>
                            </div>
                            <div class="my-2">
                                <label class="text-blue-200 text-opacity-70">Contact (optional)</label>
                                <input type="tel" name="contact" class="w-full h-9 rounded-sm border border-opacity-30 border-slate-100 bg-slate-950 bg-opacity-70 text-white">
                            </div>
                            <div class="my-6">
                                <button type="submit" class="w-3/5 block mx-auto h-9 rounded-sm border border-opacity-30 border-slate-100 bg-slate-950 bg-opacity-40 text-white text-opacity-70">Book Service</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="my-4">
                <div class="py-4 sm:grid md:grid lg:grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 w-full border-b border-slate-200 border-opacity-20">
                    @foreach ($service->images as $image)
                        <div class="w-76 h-76 relative m-1">
                            {{-- <input type="checkbox" value="{{ $image->url }}" name="urls[]" class="h-9 w-9 border absolute bottom-0 bg-white rounded m-4 text-slate-900"> --}}
                            <img class="w-full h-full object-cover object-center ring ring-white ring-opacity-30" src="{{ $image->url }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="w-full h-auto bg-blue-900">
            <x-footer></x-footer>
        </div>
    </div>
</body>
</html>
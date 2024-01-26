<x-head></x-head>
<body>
    <div class="w-full">
        <x-header-alt/>
        <div class="w-full mx-auto">
            <div class="flex justify-center text-center text-base font-semibold my-6">
                <span><a class="text-blue-900" href="{{url('/')}}">Home</a> :: <a class="text-blue-900" href="{{URL::previous()}}">Services</a> :: <span class="text-blue-600">Details</span></span>
            </div>
            <div class="my-14  md:grid lg:grid grid-cols-6 bg-white shadow-2xl shadow-slate-900">
                <div class="col-span-2 px-6 flex flex-col justify-center bg-stone">
                    <img class="w-full h-auto" id="photo_element" src="{{ $service->img_path ?? asset('asset_images/_1676749992_484911.jpg') }}">
                    <div class="flex space-x-2">
                        @foreach ($service->images as $img)
                            <img src="{{ $img->img_path }}" class="object-center h-16 w-16 rounded" onclick="showPhoto(this)">
                        @endforeach
                    </div>
                </div>
                <div class="col-span-2 px-6 flex flex-col justify-center shadow-xl">
                    <div class="py-3">
                        <div class="text-sm text-neutral-600 capitalize">Name:</div>
                        <div class="text-neutral-900">{{ $service->name }}</div>
                    </div>
                    <div class="py-3">
                        <div class="text-sm text-neutral-600 capitalize">category:</div>
                        <div class=" text-neutral-900">{{ $service->category->name??'' }}</div>
                    </div>
                    <div class="py-3">
                        <div class="text-sm text-neutral-600 capitalize">details:</div>
                        <div class="text-neutral-900">{!! $service->description??'' !!}</div>
                    </div>
                </div>
                <div class="col-span-2 px-7 bg-slate-950 border border-gray-400 border-opacity-40 py-14">
                    <div class="py-12 my-6 block rounded">
                        <div class="text-center text-3xl font-semibold text-neutral-300 my-4">Make Service Enquiry</div>
                        <hr class="w-1/5 mx-auto opacity-40 border-4">
                        <form method="POST" action="{{ route('public.services.book', $service->id) }}">
                            @csrf
                            <div class="my-2">
                                <label class="text-blue-200 text-opacity-70 block">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="w-full h-9 rounded-sm border border-opacity-30 border-slate-100 bg-slate-950 bg-opacity-70 text-white" required>
                            </div>
                            <div class="my-2">
                                <label class="text-blue-200 text-opacity-70">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="w-full h-9 rounded-sm border border-opacity-30 border-slate-100 bg-slate-950 bg-opacity-70 text-white" required>
                            </div>
                            <div class="my-2">
                                <label class="text-blue-200 text-opacity-70">Contact (optional)</label>
                                <input type="tel" name="contact" value="{{ old('contact') }}" class="w-full h-9 rounded-sm border border-opacity-30 border-slate-100 bg-slate-950 bg-opacity-70 text-white">
                            </div>
                            <div class="my-2">
                                <label class="text-blue-200 text-opacity-70">Message</label>
                                <textarea name="message" required rows="5" class="w-full rounded-sm border border-opacity-30 border-slate-100 bg-slate-950 bg-opacity-70 text-white p-2">{{ old('message', "I came accross this service on propertytrust.group and would love to know more about it.") }}</textarea>
                            </div>
                            <div class="my-6 font-semibold">
                                <button type="submit" class="px-8 block mx-auto h-9 rounded border border-opacity-30 border-slate-100 bg-slate-700 bg-opacity-40 text-white text-opacity-70"> <span class="fa fa-clock"></span> Make Enquiry</button>
                                <button onclick="window.location=`https://wa.me/237652078411?text='I came accross {{ $service->name }} ({!! '<a href='.Request::url().'>check on site</a>' !!}) on propertytrust.group'`" class="px-8 block mx-auto text-center h-9 rounded border border-opacity-30 border-slate-100 bg-green-700 bg-opacity-40 text-white text-opacity-70 my-3"> <span class="fab fa-whatsapp"></span> Chat on Whatsapp</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="my-4 px-6">
                @if(count($service->projects) > 0)
                    <div class="text-xl font-semibold mt-12 mb-1 py-1 capitalize text-center">Property</div>
                    <div class="py-4 sm:grid md:grid lg:grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 w-full border-b border-slate-200 border-opacity-20">
                        @foreach ($service->projects()->orderBy('id', 'DESC')->get() as $project)
                            {{-- @php(dd($project->images)) --}}
                            <div class="w-76 h-76 m-1  shadow-md shadow-gray-900 border rounded-md p-1">
                                <div class="relative d-flex flex-column justify-end align-bottom">
                                    <div class="w-full h-full absolute object-bottom bg-slate-950 bg-opacity-40 opacity-50 hover:opacity-100 hover:bg-opacity-75 flex flex-col justify-center leading-tight">
                                        <div class="font-semibold pt-2 object-bottom text-center uppercase w-full text-neutral-300">{{ $project->name }}</div>
                                        <hr class="w-4/5 mx-auto my-2">
                                        <div class="font-semibold pb-1 object-bottom text-center italic w-full text-slate-400">{{ $project->address }}</div>
                                        <div class="py-1 object-bottom text-center w-full text-gray-200">{!! $project->description !!}</div>
                                    </div>
                                    <img class="w-full h-full object-cover object-center ring ring-white ring-opacity-30" src="{{ $project->images()->first()->img_path ?? null }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if(count($service->property) > 0)
                    <div class="text-xl font-semibold mt-12 mb-1 py-1 capitalize text-center">Property</div>
                    <div class="py-4 sm:grid md:grid lg:grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 w-full border-b border-slate-200 border-opacity-20">
                        @foreach ($service->property()->orderBy('id', 'DESC')->get() as $property)
                            {{-- @php(dd($project->images)) --}}
                            <div class="w-76 h-76 m-1  shadow-md shadow-gray-900 border rounded-md p-1" onclick="window.location=`{{ route('assets.show', $property->id)}}`">
                                <div class="relative d-flex flex-column justify-end align-bottom">
                                    <div class="w-full h-full absolute object-bottom bg-slate-950 bg-opacity-40 opacity-50 hover:opacity-100 hover:bg-opacity-75 flex flex-col justify-center leading-tight">
                                        <div class="font-semibold pt-2 object-bottom text-center uppercase w-full text-neutral-300">{{ $property->name }}</div>
                                        <hr class="w-4/5 mx-auto my-2">
                                        <div class="font-semibold pb-1 object-bottom text-center italic w-full text-sm text-slate-400">{{ $property->price }} XAF</div>
                                        <div class="font-semibold pb-1 object-bottom text-center italic w-full text-slate-400">{{ $property->address }}</div>
                                        <div class="py-1 object-bottom text-center w-full text-gray-200">{!! $property->description !!}</div>
                                    </div>
                                    <img class="w-full h-full object-cover object-center ring ring-white ring-opacity-30" src="{{ $property->images()->first()->img_path ?? null }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        <div class="w-full h-auto bg-blue-900">
            <x-footer></x-footer>
        </div>
    </div>
    <script>
        let showPhoto = function(element){
            $('#photo_element').prop('src', $(element).prop('src'));
        }
    </script>
</body>
</html>
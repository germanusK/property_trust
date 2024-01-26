<div class="bg-white">
    <div class="px-6 md:px-12 lg:px-12 my-3 md:grid lg:grid md:grid-cols-3 lg:grid-cols-3">
        <div class="md:col-span-2 lg:col-span-2 my-12 px-2 py-4 shadow-2xl rounded bg-slate-800">
            <div class="w-full  shadow-lg bg-neutral-400 rounded">
                <img src=" {{ asset($data->images->first()->img_path ?? null) }} " alt="" class="w-full h-auto rounded" id="main_image">
            </div>
            <div class="flex flex-wrap justify-center items-center gap-2 py-2">
                @foreach($data->images as $value)
                    <button class="w-16 h-16">
                        <img src="{{ asset($value->img_path) }}" alt="" class="w-full h-full" onclick="showImage(event)">
                    </button>
                @endforeach
            </div>
        </div>
        <div class="md:col-span-1 lg:col-span-1 px-5 mx-auto py-12 flex flex-col justify-center">
            <div class="h-fit mx-auto">
                    <div class="py-4 border-b border-b-gray-950 border-opacity-10 mb-1 text-center flex items-center justify-center">
                        <div class=" w-11/12 mx-auto rounded border my-4 p-2" onclick="window.location = `{{ route('public.services.details', $data->service_id) }}`">
                            <img class="w-32 h-32 mx-auto" src="{{ $data->service->img_path??'' }}">
                            <div class="font-semibold py-1 text-center  capitalize">{{ $data->service->name??'Service missing' }}</div>
                            <p class="line-clamp-3 text-sm text-ellipses">{!! $data->service->description??'Service description missing' !!}</p>
                        </div>
                    </div>
                    <div class="py-2 border-b border-b-gray-950 border-opacity-10 mb-1 text-center items-center justify-center  sm:grid grid-cols-3 lg:grid-cols-4">
                        <label for="" class="col-span-1 text-slate-600 italic text-sm font-medium capitalize">name</label>
                        <div class="text-slate-950 col-span-2 lg:col-span-3 font-semibold"> {{ $data->name }} </div>
                    </div>
                    <div class="py-2 border-b border-b-gray-950 border-opacity-10 mb-1 text-center items-center justify-center  sm:grid grid-cols-3 lg:grid-cols-4">
                        <label for="" class="col-span-1 text-slate-600 italic text-sm font-medium capitalize">unit price</label>
                        <div class="text-slate-950 col-span-2 lg:col-span-3 font-semibold"> {{ $data->price }} XAF</div>
                    </div>
                    <div class="py-2 border-b border-b-gray-950 border-opacity-10 mb-1 text-center items-center justify-center  sm:grid grid-cols-3 lg:grid-cols-4">
                        <label for="" class="col-span-1 text-slate-600 italic text-sm font-medium capitalize">quantity</label>
                        <div class="text-slate-950 col-span-2 lg:col-span-3 font-semibold"> {{ $data->quantity }} </div>
                    </div>
                    <div class="py-2 border-b border-b-gray-950 border-opacity-10 mb-1 text-center items-center justify-center  sm:grid grid-cols-3 lg:grid-cols-4">
                        <label for="" class="col-span-1 text-slate-600 italic text-sm font-medium capitalize">description</label>
                        <div class="text-slate-950 col-span-2 lg:col-span-3 font-semibold"> {!! $data->description !!} </div>
                    </div>
                <div class="py-8 w-full items-center justify-center">
                    <button onclick="window.location=`{{ url('/bookVisit/'.$data['id']) }}`" class="px-8 block mx-auto h-9 rounded border border-opacity-30 border-slate-100 bg-slate-700 bg-opacity-90 text-white text-opacity-70"> <span class="fa fa-clock"></span> Make Enquiry / Book Visit </button>
                    <button onclick="window.location=`https://wa.me/237652078411?text='I came accross {{ $data->name }} ({!! '<a href='.Request::url().'>check on site</a>' !!}) on propertytrust.group'`" class="px-8 block mx-auto text-center h-9 rounded border border-opacity-30 border-slate-100 bg-green-700 bg-opacity-40 text-white text-opacity-70 my-3"> <span class="fab fa-whatsapp"></span> Chat on Whatsapp</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-black py-12 border-y">
    <div class="w-11/12 md:w-5/6 mx-auto">
        <div class="text-center py-3 text-white text-2xl font-semibold capitalize">You may also be interested in:</div>
        <div class="sm:grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @if(isset($related))
                @foreach($related as $key=>$value)
                    <x-generic-item2 :data="$value"/>
                @endforeach
            @endif
        </div>
    </div>
</div>
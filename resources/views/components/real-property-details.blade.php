<div class="bg-white">
    <div class="px-6 md:px-12 lg:px-12 my-3 md:grid lg:grid md:grid-cols-3 lg:grid-cols-3">
        <div class="md:col-span-2 lg:col-span-2 my-12 px-2 py-4 shadow-2xl rounded bg-slate-800">
            <div class="w-full  shadow-lg bg-neutral-400 rounded">
                <img src=" {{ asset($data->images->first()->url ?? null) }} " alt="" class="w-full h-auto rounded" id="main_image">
            </div>
            <div class="flex flex-wrap justify-center items-center gap-2 py-2">
                @foreach($data->images as $value)
                    <button class="w-16 h-16">
                        <img src="{{ asset($value->url) }}" alt="" class="w-full h-full" onclick="showImage(event)">
                    </button>
                @endforeach
            </div>
        </div>
        <div class="md:col-span-1 lg:col-span-1 px-5 mx-auto py-12 flex flex-col justify-center">
            <div class="h-fit mx-auto">
                    <div class="py-5 border-b border-b-gray-950 border-opacity-10 mb-1 text-center items-center justify-center">
                        <label for="" class="text-slate-600 italic font-medium capitalize">name</label>
                        <div class="text-slate-950 text-xl font-semibold"> {{ $data->name }} </div>
                    </div>
                    <div class="py-5 border-b border-b-gray-950 border-opacity-10 mb-1 text-center items-center justify-center">
                        <label for="" class="text-slate-600 italic font-medium capitalize">unit price</label>
                        <div class="text-slate-950 text-xl font-semibold"> {{ $data->price }} </div>
                    </div>
                    {{-- <div class="py-3 border-b border-b-stone-600 border-opacity-30 mb-1 text-center items-center justify-center">
                        <label for="" class="text-slate-600 italic font-medium capitalize">quantity</label>
                        <div class="text-slate-950 text-xl font-semibold"> {{ $data->quantity }} </div>
                    </div> --}}
                    <div class="py-5 border-b border-b-gray-950 border-opacity-10 mb-1 text-center items-center justify-center">
                        <label for="" class="text-slate-600 italic font-medium capitalize">description</label>
                        <div class="text-slate-950 text-xl font-semibold"> {{ $data->description }} </div>
                    </div>
                <div class="py-8 w-full flex items-center justify-center">
                    <a href="{{ url('/bookVisit/'.$data['id']) }}" class="py-2 px-5 text-lg font-semibold rounded border text-stone-100 bg-slate-800">Book visit</a>
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
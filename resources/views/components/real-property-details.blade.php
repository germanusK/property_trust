<div class="bg-white">
    <div class="w-11/12 md:w-5/6 mx-auto my-3 rounded-md flex flex-wrap align-middle items-center bg-slate-900 bg-opacity-80">
        <div class="w-5/6 md:w-7/12 h-full my-12 px-2 py-4 shadow-2xl rounded-2xl bg-slate-800">
            <div class="w-full  shadow-lg bg-neutral-400 p-2 rounded-2xl">
                <img src=" {{ asset($data->images->first()->url) }} " alt="" class="w-full h-auto rounded-2xl" id="main_image">
            </div>
            <div class="flex flex-wrap justify-center items-center gap-2 py-2">
                @foreach($data->images as $value)
                    <button class="w-16 h-16">
                        <img src="{{ asset($value->url) }}" alt="" class="w-full h-full" onclick="showImage(event)">
                    </button>
                @endforeach
            </div>
        </div>
        <div class="w-3/4 md:w-1/3 h-full flex align-middle items-center justify-center px-2 mx-auto py-4 overflow-y-scroll no-scrollbar bg-slate-900 bg-opacity-90">
            <div class="h-fit mx-auto">
                    <div class="py-3 border-b border-b-stone-600 border-opacity-30 mb-1 text-center items-center justify-center">
                        <label for="" class="text-white italic font-medium capitalize">name</label>
                        <div class="text-slate-100 text-xl font-semibold"> {{ $data->name }} </div>
                    </div>
                    <div class="py-3 border-b border-b-stone-600 border-opacity-30 mb-1 text-center items-center justify-center">
                        <label for="" class="text-white italic font-medium capitalize">unit price</label>
                        <div class="text-slate-100 text-xl font-semibold"> {{ $data->price }} </div>
                    </div>
                    <div class="py-3 border-b border-b-stone-600 border-opacity-30 mb-1 text-center items-center justify-center">
                        <label for="" class="text-white italic font-medium capitalize">quantity</label>
                        <div class="text-slate-100 text-xl font-semibold"> {{ $data->quantity }} </div>
                    </div>
                    <div class="py-3 border-b border-b-stone-600 border-opacity-30 mb-1 text-center items-center justify-center">
                        <label for="" class="text-white italic font-medium capitalize">description</label>
                        <div class="text-slate-100 text-xl font-semibold"> {{ $data->description }} </div>
                    </div>
                <div class="py-8 w-full flex items-center justify-center">
                    <a href="{{ url('/bookVisit/'.$data['id']) }}" class="py-2 px-5 text-lg font-semibold rounded border border-stone-300 text-stone-100 bg-stone-600">Book visit</a>
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
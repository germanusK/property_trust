<div class="w-96 h-full flex-shrink-0 relative bg-stone-600 border border-slate-600" style="max-width: 100vw;">
    <div class="w-full h-full absolute top-0 left-0">
        <div class="w-full h-full align-top justify-center flex relative">
            <div class="text-slate-100 text-nm absolute w-1/2 mx-auto top-0 bg-black text-center py-1 rounded-b-3xl border-4 border-double border-t-0 border-white"> {{ $data['price'] }} </div>
            <img src="{{ asset($data->images()->first()->url) }}" class="w-full h-fit object-center overflow-hidden object-cover">
        </div>
    </div>
    <div class="w-full h-44 absolute bottom-0 left-0 z-20 opacity-70 pt-2 bg-blue-900 hover:bg-slate-900">
        <div class="w-full h-full">
            <div class="h-auto text-center justify-center px-1 py-2">
                <div class="w-full text-white text-nm font-semibold text-ellipsis "> {{ $data['name'] }} </div>
                <div class="w-full text-white text-lg text-center line-clamp-2 whitespace-pre-wrap"> {{ $data['description'] }} </div>
                
            </div>
            <div class="h-auto flex items-end justify-start align-middle py-3">
                <div class="h-fit w-full flex flex-wrap justify-center text-center items-center">
                    <a href="{{ url('propertyDetails/'.$data['id']) }}" class="mx-2 my-1 border border-slate-50 rounded bg-black text-white w-2/5 py-1 min-w-fit px-2">Preview</a>
                    <a href="{{ url('bookVisit/'.$data['id']) }}" class="mx-2 my-1 border border-slate-50 rounded bg-black text-white w-2/5 py-1 min-w-fit px-2">Book Visit</a>
                </div>
            </div>
        </div>
    </div>
</div>
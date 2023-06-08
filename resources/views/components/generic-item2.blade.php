<div class="sm:max-w-xs md:max-w-sm h-auto px-3 py-6" style="min-width: 14rem;">
    <div class="prop w-full h-auto bg-stone-900 rounded-lg border-4 border-stone-300 hover:border-gray-600 border-double relative">
        <div class="w-full h-96 p-2 rounded-lg items-center align-middle justify-center flex relative">
            <div class="w-1/2 h-auto py-1 absolute z-10 top-0 mx-auto rounded-b-xl text-center bg-stone-900 bg-opacity-60 text-slate-200"> {{ $data['price']}} </div>
            <img src="{{ asset( $data->images->first()->url) }}" alt="failed to load image " class="w-full h-full object-center max-h-full object-cover overflow-hidden rounded-t-lg">
            <div class="w-full opacity-75 absolute bottom-0">
                <div class="w-full h-auto py-2 border-t-2 border-white rounded-t-xl rounded-b-lg bg-black hover:bg-blue-900 mt-2">
                    <div class="text-slate-50 text-xl font-semibold text-center text-ellipsis py-1"> {{$data['name']}} </div>
                    <div class="text-slate-100 text-lg text-center line-clamp-2"> {{ $data['description'] }} </div>
                </div>
                <div class="action-btn hidden absolute w-full h-auto left-0 right-0 mx-auto bottom-2 bg-stone-900">
                    <a href="{{ url('propertyDetails/'.$data['id']) }}" class="w-2/5 block mx-auto my-3 py-1 px-3 rounded text-center border border-white text-white">preview</a>
                </div>
            </div>
        </div>
    </div>
</div>
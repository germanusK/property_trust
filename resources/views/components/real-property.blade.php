
<div class="w-full min-h-screen flex flex-wrap py-16 mt-32 justify-evenly">
    <div class="w-full min-h-screen z-20 bg-slate-900">
        <div class="w-full pt-8">
            <div class="text-center w-full py-1 text-white text-2xl font-semibold">Trending/latest property</div>
            <div class="grid md:grid-cols-3 lg:grid-cols-4 items-center align-middle place-content-stretch max-h-screen overflow-x-scroll no-scrollbar">
                @if(count($trending)>0)
                    @foreach($trending as $value)
                    <x-generic-item2 :data="$value"/>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<div class="w-full sm:grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-h-screen overflow-y-scroll no-scrollbar my-10">
    <div class=" col-span-full flex justify-end mb-6">
        <span class=" border rounded"></span>
    </div>
    @if(count($property)>0)
        @foreach($property as $value)
            <x-generic-item2 :data="$value" />
        @endforeach
    @endif
</div>
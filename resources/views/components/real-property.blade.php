
<div class="w-full min-h-screen flex flex-wrap py-16 mt-32 justify-evenly">
    <div class="w-full z-20 bg-slate-900 py-0">
        <div class="w-full pt-8">
            <div class="text-center w-full py-1 text-white text-2xl font-semibold">Trending/latest property</div>
            <div class=" w-full whitespace-nowrap overflow-x-scroll no-scrollbar">
                <div class="w-fit md:w-full flex md:flex-wrap items-center align-middle place-content-stretch h-fit">
                    @if(count($trending)>0)
                        @foreach($trending as $value)
                            <div class="w-84 whitespace-normal">
                                <x-generic-item2 :data="$value"/>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="flex w-full overflow-x-scroll whitespace-nowrap md:whitespace-normal no-scrollbar">
    <div class="flex w-fit md:flex-wrap h-fit my-10">
        @if(count($property)>0)
            @foreach($property as $value)
                <div class=" w-60 h-80 mx-2 my-2 whitespace-normal">
                    <x-generic-item2 :data="$value" />
                </div>
            @endforeach
        @endif
    </div>
</div>
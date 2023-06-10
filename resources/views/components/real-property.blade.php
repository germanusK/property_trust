
<div class="w-full min-h-screen flex flex-wrap py-16 mt-32 justify-evenly">
    <div class=" min-h-screen z-20 bg-slate-900">
        <!-- <div class="w-3/4 py-6 rounded-xl align-middle ml-14 -mt-12 property-bg">
            <div class="w-full h-full -mt-16 min-w-fit pb-4 mb-4 rounded-xl ml-8 sm:ml-14 md:ml-20 lg:ml-28 top-16 border bg-slate-900" >
                <div class="w-fit max-w-full inline-block mx-auto h-fit justify-between items-center align-middle">
                    <div class="w-4/5 mx-auto justify-center text-center align-middle py-4 flex">
                        <div class="text-2xl md:text-4xl  text-slate-300">Get it now and save the cost appreciation</div>
                        <img src="{{ url('img/shut.jpg') }}" alt="" class="w-60 h-60 rounded-full opacity-95">
                    </div>
                    <div class="justify-center h-full align-middle items-center px-4 bg-white bg-opacity-95">
                        <x-search-component></x-search-component>
                    </div>
                </div>
        
            </div>
        </div> -->
        <div class="w-full pt-8">
            <div class="text-center w-full py-1 text-white text-2xl font-semibold">Trending/latest property</div>
            <div class="grid md:grid-cols-3 lg:grid-cols-4 items-center align-middle place-content-stretch max-h-screen overflow-y-scroll no-scrollbar">
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
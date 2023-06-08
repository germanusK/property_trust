<div class="w-full">
    <div class="w-11/12 md:w-5/6 mx-auto py-8">
        <div class="w-5/6 mx-auto sm:grid grid-cols-7 my-8">
            <div class="col-span-3 text-center text-stone-800 text-6xl font-semibold italic text-opacity-90 h-full items-center justify-center align-middle flex flex-wrap mix-blend-hard-light bg-blend-overlay">The customized market for you</div>
            <img src="{{ url('img/COGO.jpg') }}" alt="" class=" col-span-4 rounded-xl w-full max-w-lg h-96 mx-auto shadow-2xl shadow-black border-collapse border border-stone-900">
        </div>
    </div>
    <hr class="w-2/5 mx-auto bg-black border border-black my-10">  
    <div class="w-full bg-stone-900 bg-blend-darken">
        <div class="w-11/12 md:w-5/6 mx-auto py-8">
            <div class="w-full h-96 align-middle items-center">
                <div class="w-full h-full flex whitespace-nowrap overflow-x-scroll no-scrollbar gap-6">
                    @if(count($trending)>0)
                        @foreach($trending as $key=>$value)
                            <x-generic-item :data="$value"/>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div> 

    <div class="w-11/12 md:w-5/6 mx-auto py-8">
        <div class="w-full sm:grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-h-screen overflow-y-scroll no-scrollbar">
            @if(count($data)>0)
                @foreach($data as $key=>$value)
                    <x-generic-item2 :data="$value"/>
                @endforeach
            @endif
            
        </div>
    </div>
</div>
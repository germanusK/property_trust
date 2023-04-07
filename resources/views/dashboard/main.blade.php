<x-head/>
    <body>
        <div class="w-full md:w-11/12 mx-auto h-screen bg-stone-900 border-x border-slate-500">
            <div class="w-full h-full md:grid grid-cols-5 xs:divide-y md:divide-x divide-white">
                <div class="md:col-span-1 flex md:h-full overflow-y-scroll no-scrollbar">
                    <x-dashboard.navbar />
                </div>
                <div class="md:col-span-4 md:h-full md:flex items-center align-top overflow-y-scroll no-scrollbar px-3 bg-white" >
                    @if (session()->has('message') || session()->has('success') || session()->has('error'))
                    @switch(session(''))
                        @case()
                            
                            @break
                    
                        @default
                            
                    @endswitch
                        <div class="bg-sky-100 py-3 text-center"></div>
                    @endif
                    @yield('content') 
                </div>
            </div>
        </div> 
        @yield('script')
    </body>
</html>
<x-head/>
    <body>
        <div class="w-full md:w-11/12 mx-auto h-screen bg-stone-900 border-x border-slate-500">
            <div class="w-full h-full md:grid grid-cols-5 xs:divide-y md:divide-x divide-white">
                <div class="md:col-span-1 flex md:h-full overflow-y-scroll no-scrollbar">
                    <x-dashboard.navbar />
                </div>
                <div class="md:col-span-4 md:h-full md:flex items-center align-top overflow-y-scroll no-scrollbar px-3 bg-slate-100" >
                    @if (session()->has('message'))
                        <div class="bg-green-100 text-green-600 py-3 text-center">{{session('message')}} </div>
                    @endif
                    @if (session()->has('success'))
                        <div class="bg-blue-100 text-blue-600 py-3 text-center">{{session('success')}} </div>
                    @endif
                    @if ( session()->has('error'))
                        <div class="bg-red-100 text-red-600 py-3 text-center">{{session('error')}} </div>
                    @endif
                    @yield('content') 
                </div>
            </div>
        </div> 
        @yield('script')
    </body>
</html>
<div class="w-full md:h-full md:overflow-y-scroll no-scrollbar flex items-start align-top justify-start">
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <div class="md:block mx-1  md:my-6 w-full justify-between flex align-top items-start">
        <div class="w-24 md:w-full py-4">
            <img src="{{ asset('img/logo1.jpg') }}" alt="logo" class="w-12 md:w-20 h-12 md:h-20 rounded-full mx-auto">
        </div>
        <div class="absolute right-0 bg-stone-900 md:static flex md:block justify-start align-top items-start">
            <div id="navbox" class="divide-y divide-stone-700 w-full hidden md:block py-4 md:px-2 self-end justify-self-end md:object-left">
                <a href="{{ url('/rest') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"><span class="fa fa-home pr-2"><span> Dashboard</a>
                <div class="menu-item divide-y divide-stone-700">
                    <a class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"> <span class="float-right fa fa-caret-down"></span><span class="fa fa-chart-pie pr-2"><span> Property</a>
                    <ul class="drop-down pl-4 divide-y divide-stone-400">
                        <div class="menu-item">
                            <a href="{{ url('/rest/property') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"> <span class="fa fa-caret-right"></span> index</a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ url('/rest/property') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"> <span class="fa fa-caret-right"></span> create</a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ url('/rest/property') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"> <span class="fa fa-caret-right"></span> categories</a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ url('/rest/property') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"> <span class="fa fa-caret-right"></span> grades</a>
                        </div>
                    </ul>
                </div>
                <div class="menu-item divide-y divide-stone-700">
                    <a class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"> <span class="float-right fa fa-caret-down"></span><span class="fa fa-chart-bar pr-2"><span> Services</a>
                    <ul class="drop-down pl-4 divide-y divide-stone-400">
                        <div class="menu-item">
                            <a href="{{ url('/rest/property') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"><span class=" fa fa-caret-right"></span> index</a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ url('/rest/property') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"> <span class=" fa fa-caret-right"></span> create</a>
                        </div>
                    </ul>
                </div>
                <div class="menu-item divide-y divide-stone-700">
                    <a class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"> <span class="float-right fa fa-caret-down"></span><span class="fa fa-coffee pr-2"><span> Schedules</a>
                    <ul class="drop-down pl-4 divide-y divide-stone-400">
                        <div class="menu-item">
                            <a href="{{ url('/rest/schedules') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"> <span class="fa fa-caret-right"></span> index</a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ url('/rest/property') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"> <span class="fa fa-caret-right"></span> configure</a>
                        </div>
                    </ul>
                </div>
                <a href="{{ url('/rest/customers') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"><span class="fa fa-users pr-2"><span> Customers</a>
                <a href="{{ url('/rest/info') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"><span class="fa fa-podcast pr-2"><span> Info</a>
                <a href="{{ url('/rest/messages') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-2 px-3"><span class="fa fa-envelope pr-2"><span> Messages</a>
                <form action="{{ route('logout') }}" method="post">
                    {{csrf_field()}}
                    <button type="submit" class="block w-full no-underline hover:no-underline text-slate-200 text-lg text-left py-5 px-3">Log out</button>
                </form>
            </div>
            <div class=" p-2 flex md:block w-full h-full object-top align-middle items-center justify-between">
                <div class="h-full flex  md:w-full align-middle items-center divide-x-4 divide-transparent">
                    <img src=" {{ asset('img/logo1.jpg') }} " alt="" class="w-12 h-12 rounded-full hidden md:flex">
                    <span class="hidden sm:block flex-auto text-slate-200 italic">Germanus</span>
                </div>
                <span class="flex md:hidden ml-6 rounded border border-white py-2 px-3" onclick="toggleNav()"><span class="text-lg text-white fas fa-bars"></span></span>
            </div>
            <script>
                function toggleNav() {
                    if (document.getElementById('navbox').classList.contains('hidden')) {
                        document.getElementById('navbox').classList.remove('hidden');
                    } else {
                        document.getElementById('navbox').classList.add('hidden');
                    }
                }
                $('.menu-item').on('click', function(){
                    // $(this).children('.drop-down').css('display', 'block');
                    $(this).children('.drop-down').css('display', $(this).children('.drop-down').css('display') == 'block' ? 'none' : 'block');
                });
            </script>
        </div>
    </div>
</div>
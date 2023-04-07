<div class="w-full h-auto bg-blue-500 text-slate-200 relative">
    <div class="h-full w-11/12 flex align-middle items-stretch justify-between mx-auto py-3 relative">
        <div class=" h-auto w-fit px-16 xs:block justify-center text-2xl italic font-semibomd self-start">
            <img src="{{ asset('img/logo1.jpg') }}" alt="LOGO" class="w-12 h-auto rounded-t-full">
        </div> 
        <div id="nav-box" class="h-fit w-fit hidden md:flex flex-wrap justify-end text-lg  font-normal flex-auto gap-x-2 gap-y-2 divide-blue-600 bg-transparent">
            <a href="{{ url('/') }}" class="block lg:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">Home</a>
            <a href="{{ url('/property') }}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">Our Property</a>
            <a href="{{route('public.services')}}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">Services</a>
            <a href="{{ url('/about') }}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">About</a>
            <a href="{{route('public.contacts')}}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">Contact</a>
        </div>
        <button class="self-end md:hidden" id="nav-toggler" onclick="toggle_nav()"><span class="fas fa-bars text-slate-200 text-2xl font-semibold"></span></button>
        <button onclick="toggle_search()" class=" self-end px-2 mx-2 my-2 rounded-3xl border-2 border-blue-300 h-fit md:bg-transparent">search</button>
    </div>
    <div id="seach-box" class="hidden h-full bg-white  w-full">
        <x-search-component/>
    </div>
    
</div>

<div class="w-full min-h-screen relative ">
    <div class="w-1/2 h-1/2  align-bottom items-end justify-end flex absolute bottom-0 left-0 px-2 py-2 bg-blue-900">
        <div class="w-fit mx-auto">
            <div class="text-center py-4">
                <div class="py-2 text-white text-3xl md:text-4xl font-semibold italic text-ellipsis flex-wrap">Welcome To <span class="text-pink-700">Property Trust</span></div>
                <div class="text-2xl text-slate-200 italic text-center flex-wrap">Where real property comes home</div>
            </div>
            <div class="w-full flex items-center justify-center py-4">
                <div class=" text-xl font-semibold">
                    <a href="{{ url('/property') }}" class=" inline-flex flex-auto sm:inline-block px-5 py-2 rounded text-center text-ellipsis w-auto bg-white text-blue-800 ">View Property</a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-1/2 h-full right-0 bottom-0 left-auto absolute align-bottom bg-white items-end justify-end flex py-2">
        <div class="w-4/5 mx-auto h-1/2 flex align-middle items-center justify-center text-center text-ellipsis line-clamp-3 text-4xl font-semibold">
            Don't wait to buy real estate, Buy real estate and wait
        </div>
    </div>
    <div class="w-11/12 h-2/3 md:h-96 absolute top-0 left-0 right-auto rounded-br-3xl z-10 bg-white pr-2">
        <div class="w-full h-full rounded-br-3xl border-b-8 border-r-8 border-blue-900 items-center align-middle justify-center flex">
            <img src="{{ asset('img/home.jpg') }}" class="w-full h-full overflow-hidden object-cover rounded-br-2xl">
        </div>
    </div>
    <div class="w-2/5 absolute flex top-0 right-0 border-b-8 border-l-8 rounded-bl-full border-white z-20 bg-blue-500 justify-center items-center align-middle flex-wrap pl-4 py-4">
        <a href="{{ url('') }}" class="mx-4"><span class="text-4xl font-semibold text-slate-200 fas fa-home"></span></a>
        <a href="{{ url('/login') }}" class="mx-4"><span class="text-4xl font-sans mx-5 text-blue-900 fas fa-sign-in-alt"></span></a>
    </div>
</div>
<script>
    function toggle_search() {
    document.getElementById('seach-box').classList.contains('hidden')?
    document.getElementById('seach-box').classList.remove('hidden'):
    document.getElementById('seach-box').classList.add('hidden');
}

// Toggler for navigation

function toggle_nav() {
    if(document.getElementById('nav-box').classList.contains('hidden'))
    {
        document.getElementById("nav-box").classList.remove("hidden");
        document.getElementById("nav-box").classList.add("inline-block");
        document.getElementById("nav-box").classList.add("md:flex");
    }
    else{
        document.getElementById("nav-box").classList.add("hidden");
        document.getElementById("nav-box").classList.remove("inline-block");
        document.getElementById("nav-box").classList.remove("md:flex");


    }
}
</script>
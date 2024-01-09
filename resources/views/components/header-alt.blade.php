<div class="w-full h-auto bg-slate-900 text-slate-200 relative">
    <div class="w-full align-middle bg-slate-900 text-white items-center justify-center flex py-2">
        <div id="peti-design" class="w-11/12 rounded-md mx-auto h-full flex align-middle items-center justify-center text-center text-ellipsis line-clamp-3 text-xl font-semibold border-y-2">
            <marquee>Don't wait to buy real estate, Buy real estate and wait</marquee> 
        </div>
    </div>
    <div id="seach-box" class="h-full w-full">
        <x-search-component/>
    </div>
    <div class="h-full w-11/12 flex align-top items-stretch justify-between mx-auto py-3 relative">
        <a href="{{ url('/') }}" class=" inline-block h-auto w-fit px-16 xs:block justify-center text-2xl italic font-semibomd self-start">
            <img src="{{ asset('img/logo1.jpg') }}" alt="LOGO" class="w-12 h-auto rounded-t-full">
        </a> 
        <div class="flex">
            <div id="nav-box" class=" h-fit w-fit hidden md:flex flex-wrap justify-end text-lg  font-normal flex-auto gap-x-2 gap-y-2 divide-blue-600 bg-transparent">
                <a href="{{ url('/') }}" class="block lg:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">Home</a>
                <a href="{{ url('/property') }}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">Our Property</a>
                <a href="{{route('public.services')}}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">Services</a>
                <a href="{{ url('/about') }}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">About</a>
                <a href="{{route('public.contacts')}}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">Contact</a>
                <a href="{{ url('/login') }}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent"><span class="text-xl font-sans text-blue-100 ">Log in</span></a>
            </div>
            <div class=" inline-flex">
                <button class=" self-start md:hidden active:border-0" id="nav-toggler" onclick="toggle_nav()"><span class="fas fa-bars text-slate-200 text-2xl font-semibold"></span></button>
            </div>
        </div>
    </div>
    
</div>

<div class="w-full h-40 md:h-96 relative bg-transparent header-section2">
    <div class="w-11/12 h-full absolute top-0 left-0 right-auto rounded-br-3xl z-10 bg-transparent pb-2 pr-2">
        <div class="w-full h-full rounded-br-3xl border-b-8 border-r-8 border-slate-900 items-center align-middle justify-center flex">
            <img src="{{ asset('img/hero.jpeg') }}" class="w-full h-full overflow-hidden object-cover rounded-br-2xl">
        </div>
    </div>
    <div class="w-2/5 absolute hidden md:flex top-0 right-0 border-b-8 border-l-8 rounded-bl-full border-white z-20 bg-slate-900 justify-center items-center align-middle flex-wrap pl-4 py-4">
        <a href="{{ url('') }}" class="mx-4"><span class="text-2xl md:text-4xl font-semibold text-slate-200 fas fa-home"></span></a>
        {{-- <a href="{{ url('/login') }}" class="mx-4"><span class="text-4xl font-sans mx-5 text-blue-100 "> &curlyeqsucc;</span></a> --}}
    </div>
</div>
<script>

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
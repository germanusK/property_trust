<x-head></x-head>
    <body class=" min-h-screen">

        <!-- PAGE HEADER -->
        <div class="w-full h-auto bg-gradient-to-r from-black to-current">
            <x-header></x-header>
        </div>
        <!-- END OF PAGE HEADER -->
        

        <div class="w-11/12 md:w-5/6 h-auto mt-16 mb-8 rounded-xl mx-auto">

            <!-- STATISTICS -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 px-4 py-3 my-4 text-center bg-light">
                <div class="relative mb-12 px-3 lg:mb-0">
                  <div class="mb-2 flex justify-center">
                    <span class="text-primary">
                      <svg
                        xmlns="https://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="h-11 w-11">
                        <path
                          d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
                      </svg>
                    </span>
                  </div>
                  <h5 class="mb-6 font-bold text-primary">{{ \App\Models\Asset::count() }}</h5>
                  <h6 class="mb-0 font-normal dark:text-neutral-50">Property</h6>
                  <div
                    class="absolute right-0 top-0 hidden h-full min-h-[1em] w-px self-stretch border-t-0 bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 lg:block"></div>
                </div>
                <div class="relative mb-12 px-3 lg:mb-0">
                  <div class="mb-2 flex justify-center">
                    <span class="text-primary">
                      <svg
                        xmlns="https://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="h-11 w-11">
                        <path
                          d="M11.644 1.59a.75.75 0 01.712 0l9.75 5.25a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.712 0l-9.75-5.25a.75.75 0 010-1.32l9.75-5.25z" />
                        <path
                          d="M3.265 10.602l7.668 4.129a2.25 2.25 0 002.134 0l7.668-4.13 1.37.739a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.71 0l-9.75-5.25a.75.75 0 010-1.32l1.37-.738z" />
                        <path
                          d="M10.933 19.231l-7.668-4.13-1.37.739a.75.75 0 000 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 000-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 01-2.134-.001z" />
                      </svg>
                    </span>
                  </div>
                  <h5 class="mb-6 font-bold text-primary">{{ \App\Models\Project::count() }}</h5>
                  <h6 class="mb-0 font-normal dark:text-neutral-50">Projects</h6>
                  <div
                    class="absolute right-0 top-0 hidden h-full min-h-[1em] w-px self-stretch border-t-0 bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 lg:block"></div>
                </div>
                <div class="relative mb-12 px-3 lg:mb-0">
                  <div class="mb-2 flex justify-center">
                    <span class="text-primary">
                      <svg
                        xmlns="https://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="h-11 w-11">
                        <path
                          fill-rule="evenodd"
                          d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                          clip-rule="evenodd" />
                      </svg>
                    </span>
                  </div>
                  <h5 class="mb-6 font-bold text-primary">{{ \App\Models\Service::count() }}</h5>
                  <h6 class="mb-0 font-normal dark:text-neutral-50">Services</h6>
                  <div
                    class="absolute right-0 top-0 hidden h-full min-h-[1em] w-px self-stretch border-t-0 bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 lg:block"></div>
                </div>
                <div class="relative mb-12 px-3 lg:mb-0">
                  <div class="mb-2 flex justify-center">
                    <span class="text-primary">
                      <svg
                        xmlns="https://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="h-11 w-11">
                        <path
                          fill-rule="evenodd"
                          d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                          clip-rule="evenodd" />
                      </svg>
                    </span>
                  </div>
                  <h5 class="mb-6 font-bold text-primary">{{ \App\Models\Customer::count() }}</h5>
                  <h6 class="mb-0 font-normal dark:text-neutral-50">Customers</h6>
                </div>
            </div>
            <!-- /STATISTICS -->

        </div>

        {{-- SERVICE CATEGORIES --}}
        <div class="py-6 border-t">
            <div class="w-11/12 md:w-5/6 h-auto mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6">
                    @for($i = 0; $i < 12; $i++)
                        <div class="rounded border border-gray-100 m-1 hover:shadow hover:bg-neutral-100">
                            <a class="flex flex-col w-full h-full text-center justify-center capitalize py-5" href="">category item</a>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        {{-- END OF SERVICE CATEGORIES --}}


        <!-- BANNER -->
        <div class="w-full h-auto bg-black">
            <div class="w-11/12 md:w-5/6  mx-auto text-center bg-light">
                <div class="">
                    <img class="object-fill object-center w-full h-auto" src="{{ asset('img/banners/horizontal1.gif') }}">
                </div>
            </div>
        </div>
        <!-- /BANNER -->

        <div class="w-11/12 md:w-5/6 h-auto my-8 rounded-xl mx-auto">
            <!-- SERVICES -->
            <div class="text-center text-2xl md:text-3xl text-slate-700 capitalize mt-12 ">our services <br> <hr class="w-1/6 md:w-1/12 border border-slate-300 border-dashed mx-auto"></div>
            <div class="w-full bg-light flex md:flex-wrap overflow-x-scroll no-scrollbar whitespace-nowrap md:whitespace-normal">
                <div class="w-fit flex md:flex-wrap items-baseline align-middle justify-center pb-8 pt-5">
                    @foreach (\App\Models\Service::all() as $service)
                        <div class="w-72 md:w-1/3 lg:w-1/4 xl:w-1/4 h-fit py-3 px-2 whitespace-normal" style="min-width: 16rem;">
                            <div class="rounded shadow-lg h-auto py-5 px-2 w-full border border-slate-50 hover:border-slate-900 text-center service-cards">
                                <div class="rounded-full flex flex-col text-center justify-center w-24 h-28 mt-3 mx-auto shadow-inner bg-slate-100 overflow-hidden">
                                    @if ($service->icon_path != null)
                                        <img class="h-28 w-24 object-cover object-center rounded" src="{{ $service->icon_path }}">
                                    @else
                                        <span class=" text-6xl text-blue-700 fas fa-cocktail"></span>
                                    @endif
                                </div>
                                <div class="h-3/5 w-full pb-5">
                                    <div class="font-semibold py-4 text-xl text-blue-800 text-center text-ellipsis line-clamp-2">
                                        {{ $service->name }}
                                    </div>
                                    <div class="text-lg text-slate-600 text-center line-clamp-3 mb-7">{!! $service->description !!}</div>
                                    <a class="px-8 py-3 rounded-full bg-blue-900 text-white" href="{{ route('public.services.details', [$service->id]) }}">more info</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- END OF SERVICES -->
        </div>



        <!-- Our works or products -->
        <!-- Latest -->
        <div class="lg:grid grid-cols-4 w-full">
            <div class=" lg:col-span-3 ">
                <div class="w-full h-auto md:h-screen bg-black py-12">
                    
                    <div class="lg:w-11/12 mx-auto text-2xl text-slate-100 text-center font-semibold py-2">Latest Deals</div>
                    <div class="lg:w-11/12 mx-auto text-slate-500 text-center mb-4">Don't think about it's current value. <br>Think about it's future value</div>
                    <!-- Horizontal scrolling container -->
                    <div class="w-well h-96 md:h-3/4 mx-auto my-4  relative">
                        
                        <div class="bg-transparent absolute z-20 h-full w-full flex justify-center items-center align-middle">
                            <div class="w-full h-fit flex py-4 justify-between">
                                <li class="w-12 hidden md:flex flex-col justify-center align-middle" onclick="_scrollLeft()">
                                    <a class="font-black py-1 rounded-full text-sky-900 text-6xl font-sans drop-shadow-2xl">&Lang;</a>
                                </li>
                                <li class="w-12 hidden md:flex flex-col justify-center align-middle" onclick="_scrollRight()">
                                    <span class="font-black py-1 rounded-full text-sky-900 text-6xl font-sans drop-shadow-2xl">&Rang;</span>
                                </li>
                            </div>
                        </div>
                        <div class="w-full mx-auto h-full flex whitespace-nowrap overflow-x-scroll no-scrollbar scroll-smooth" id="generic_scrollable">
                            @if(count($assets)>0)
                                @foreach($assets->shuffle() as $value)
                                <!-- Horizontal scroll item -->
                                <x-generic-item :data="$value" class="mx-2"/>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Others -->
                <div class="w-full whitespace-nowrap md:whitespace-normal overflow-x-scroll no-scrollbar">
                    <div class="w-fit md:w-full h-auto flex md:flex-wrap items-baseline align-middle justify-center" >
                        @if(count($assets)>0)
                            @foreach($assets as $value)
                            <div class="w-72 whitespace-normal service-cards">
                                <x-generic-item2 :data="$value"/>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="lg:col-span-1 flex items-center justify-center">
                <img class="object-cover object-center w-full h-full border-x-4" src="{{ asset('img/hero.jpeg') }}">
            </div>
        </div>

        {{-- 
        <!-- Our core values and interests -->
        <div class="w-full bg-slate-50 py-6 shadow-inner justify-center">
            <div class="w-full rounded-2xl max-h-screen">
                <video class="object-contain h-full w-56 md:w-64 lg:w-64 mx-auto rounded-md my-3" src="{{ asset('videos/vid1.mp4') }}" controls></video>
            </div>
        </div> --}}

        
        <!-- BG-VIDEO -->
        <div class="w-full h-fit bg-black">
            <div class="relative h-96 w-full">
                <div class="w-full h-full min-h-fit flex flex-col items-center align-middle justify-center absolute text-center z-20 bg-slate-950 bg-opacity-80">
                    {{-- <span class="block text-center text-4xl font-semibold text-slate-200 my-4">All</span> <br> --}}
                    <a href="https://www.youtube.com/channel/UCAWwEEqgckiFiuoKQuLKPoA" class="w-24 hover:w-32 h-24 hover:h-32 flex items-center align-middle justify-center bg-red-700 text-white hover:bg-red-500 rounded-full hover:border border-white">
                        <span class="fa-brands fa-youtube fa-4x shadow-2xl shadow-white outline-1"></span>
                    </a>
                </div>
                <video autoplay loop muted class="absolute w-full h-full object-cover object-center">
                    <source src="{{ asset('videos/advert1.mp4') }}" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <!-- /BG-VIDEO -->
        
        <!-- BG-VIDEO -->
        <div class="w-full h-fit bg-black">
            <div class="relative min-h-full">
                <div class="w-full h-full min-h-fit flex flex-col justify-center text-center z-20 bg-slate-950 bg-opacity-80">
                    <div class=" py-6 px-3 md:w-5/6 mx-auto text-center">
                        <h2 class="font-semibold text-capitalize my-8 text-3xl text-slate-300">We cover all you need</h2>
                        <div class="sm:grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                            <div class="w-4/5 sm:w-auto mx-auto col-span-1 py-4 px-2 bg-black rounded-lg shadow-lg my-4 border">
                                <div class="flex-1 flex flex-col justify-center text-center py-3">
                                    <span class="text-2xl text-slate-300 font-semibold">Commercial Real Estate</span>
                                </div>
                                <div class="flex-1 flex flex-col justify-center text-center">
                                    <span class="text-lg text-slate-400 font-semibold capitalize">retail spaces, hospitals, offices, nursing homes, and storage facilities</span>
                                </div>
                            </div>
                            <div class="w-4/5 sm:w-auto mx-auto col-span-1 py-4 px-2 bg-black rounded-lg shadow-lg my-4 border">
                                <div class="flex-1 flex flex-col justify-center text-center py-3">
                                    <span class="text-2xl text-slate-300 font-semibold">Residential Real Estate</span>
                                </div>
                                <div class="flex-1 flex flex-col justify-center text-center">
                                    <span class="text-lg text-slate-400 font-semibold capitalize">Duplexes, apartment buildings, multifamily housing, condos, tiny home investing, and student housing</span>
                                </div>
                            </div>
                            <div class="w-4/5 sm:w-auto mx-auto col-span-1 py-4 px-2 bg-black rounded-lg shadow-lg my-4 border">
                                <div class="flex-1 flex flex-col justify-center text-center py-3">
                                    <span class="text-2xl text-slate-300 font-semibold">Land Ownership Real Estate</span>
                                </div>
                                <div class="flex-1 flex flex-col justify-center text-center">
                                    <span class="text-lg text-slate-400 font-semibold capitalize">land that’s purchased, sold, and rented out</span>
                                </div>
                            </div>
                            <div class="w-4/5 sm:w-auto mx-auto col-span-1 py-4 px-2 bg-black rounded-lg shadow-lg my-4 border">
                                <div class="flex-1 flex flex-col justify-center text-center py-3">
                                    <span class="text-2xl text-slate-300 font-semibold">Construction</span>
                                </div>
                                <div class="flex-1 flex flex-col justify-center text-center">
                                    <span class="text-lg text-slate-400 font-semibold capitalize">architectural design, project execution, etc</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /BG-VIDEO -->

        
        <div class="w-full xxl:px-8 h-auto lg:grid grid-cols-4 mx-auto">
            <div class="col-span-3">

                <div class="w-full col-span-2 md:px-8 h-auto sm:grid grid-cols-3 mx-auto py-12">
                    <div class="col-span-3 text-center text-2xl font-semibold pb-10">Core Values <br> <span class="text-sm capitalize">our standards at the core</span></div>
                    <!-- <hr class="col-span-3"> -->
                    <div class="col-span-3 h-full">
                        <div class="sm:grid grid-cols-2 lg:grid-cols-3 xxl:grid-cols-4">
                            <div class="w-4/5 sm:w-auto mx-auto col-span-1 py-4 px-2 bg-white rounded-lg shadow-lg my-4 border">
                                <div class="flex-1 flex flex-col justify-center text-center py-3">
                                    <span class="text-2xl text-slate-600 font-semibold">Commitment</span>
                                </div>
                                <div class="flex-1 flex flex-col justify-center text-center">
                                    <span class="text-lg text-slate-500 font-semibold capitalize">You are our pillars, we ensure the security of your request.</span>
                                </div>
                            </div>
                            <div class="w-4/5 sm:w-auto mx-auto col-span-1 py-4 px-2 bg-white rounded-lg shadow-lg my-4 border">
                                <div class="flex-1 flex flex-col justify-center text-center py-3">
                                    <span class="text-2xl text-slate-600 font-semibold">Simplicity</span>
                                </div>
                                <div class="flex-1 flex flex-col justify-center text-center">
                                    <span class="text-lg text-slate-500 font-semibold capitalize">You are at the center of our process design. Straight forward and concise.</span>
                                </div>
                            </div>
                            <div class="w-4/5 sm:w-auto mx-auto col-span-1 py-4 px-2 bg-white rounded-lg shadow-lg my-4 border">
                                <div class="flex-1 flex flex-col justify-center text-center py-3">
                                    <span class="text-2xl text-slate-600 font-semibold">Excellence</span>
                                </div>
                                <div class="flex-1 flex flex-col justify-center text-center">
                                    <span class="text-lg text-slate-500 font-semibold capitalize">Our service grade is second to none. Confirm it yourself.</span>
                                </div>
                            </div>
                            <div class="w-4/5 sm:w-auto mx-auto col-span-1 py-4 px-2 bg-white rounded-lg shadow-lg my-4 border">
                                <div class="flex-1 flex flex-col justify-center text-center py-3">
                                    <span class="text-2xl text-slate-600 font-semibold">Innovation</span>
                                </div>
                                <div class="flex-1 flex flex-col justify-center text-center">
                                    <span class="text-lg text-slate-500 font-semibold capitalize">With our diversified collection of services, you can always get a better fit</span>
                                </div>
                            </div>
                            <div class="w-4/5 sm:w-auto mx-auto col-span-1 py-4 px-2 bg-white rounded-lg shadow-lg my-4 border">
                                <div class="flex-1 flex flex-col justify-center text-center py-3">
                                    <span class="text-2xl text-slate-600 font-semibold">Proactivity</span>
                                </div>
                                <div class="flex-1 flex flex-col justify-center text-center">
                                    <span class="text-lg text-slate-500 font-semibold capitalize">All you need to get your deals done is set. Hassle free deals for you</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Our users testify -->
                <div class="w-full h-auto bg-light py-12 justify-center">
                    <div class="w-11/12  md:w-5/6 mx-auto md:px-16 rounded-2xl h-auto">
                        <div class="w-full text-center text-2xl text-slate-900 font-semibold py-10">Our Customers <br><span class="text-sm capitalize">they are satisfied</span></div>
                        <!-- <hr class="col-span-3"> -->
                        <div class="w-full mx-auto overflow-x-scroll no-scrollbar whitespace-nowrap md:whitespace-normal">
                            <div class="w-fit md:w-full h-full flex md:flex-wrap items-bottom align-center justify-evenly">
                                @foreach (\App\Models\Customer::inRandomOrder()->take(3)->get()->shuffle() as $customer)
                                    <!-- single item -->
                                    <div class=" my-3 mx-2 px-3 pb-4 h-auto w-72 max-w-full relative whitespace-normal service-cards">
                                        <div class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                            <a href="#!">
                                                <img class="rounded-t-lg" src="{{asset('img/customer1.jpeg')}}" alt="" />
                                            </a>
                                            <div class="p-6 bg-slate-900 rounded-b-lg bg-opacity-25">
                                                <h5 class="mb-2 text-xl text-center font-semibold leading-tight text-neutral-800 dark:text-neutral-50"> {{ $customer->name }} </h5>
                                                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                                Tel: {{ $customer->contact }}, {{ $customer->email }}
                                                </p>
                                                {{-- <button type="button" class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                                Button
                                                </button> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div class="w-full h-auto border-y-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.3234487756235!2d9.284495013744113!3d4.156663596977882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106131fb28383773%3A0xe0908049832295fd!2sPROPERTY%20TRUST!5e0!3m2!1sen!2scm!4v1679866113967!5m2!1sen!2scm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mx-auto"></iframe>
                </div>
            </div>
            <div class="">
                <img class="object-center object-fill w-full h-auto" src="{{ asset('img/banners/vertical1.gif') }}">
            </div>
        </div>


        <!-- Subscription and footer-->
        <div class="w-full h-auto bg-blue-900">
            <x-footer></x-footer>
        </div>

      <script>
        function _scrollLeft() {
            $('#generic_scrollable').scrollLeft(document.querySelector('#generic_scrollable').scrollLeft-200);
            // document.querySelector('#generic_scrollable').scrollLeft = document.querySelector('#generic_scrollable').scrollLeft - 100;
        }
        function _scrollRight() {
            // document.querySelector('#generic_scrollable').scrollLeft = document.querySelector('#generic_scrollable').scrollLeft + 100;
            $('#generic_scrollable').scrollLeft($('#generic_scrollable').scrollLeft()+200);
        }


      </script>
    </body>
</html>

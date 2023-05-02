<x-head></x-head>
    <body class=" min-h-screen">

        <!-- PAGE HEADER -->
        <div class="w-full h-auto bg-gradient-to-r from-black to-current">
            <x-header></x-header>
        </div>
        <!-- END OF PAGE HEADER -->
        

        <!-- SERVICES -->
        <div class="w-11/12 md:w-5/6 h-auto my-16 rounded-xl mx-auto">

            <div class="w-full flex flex-wrap items-baseline align-middle justify-center py-8 px-4 bg-white">
                <div class="xs:w-full sm:w-1/2 md:w-1/3 lg:w-1/4 h-fit py-3 px-2">
                    <div class="rounded shadow-lg h-auto py-5 px-2 w-full border border-slate-50 hover:border-slate-900 text-center">
                        <div class="rounded-full w-24 h-28 mt-3 mx-auto">
                            <span class=" text-6xl text-blue-700 fas fa-cocktail"></span>
                        </div>
                        <div class="h-3/5 w-full pb-5">
                            <div class="font-semibold py-4 text-xl text-blue-800 text-center text-ellipsis">
                                Real Estate
                            </div>
                            <div class="text-lg text-slate-600 text-center line-clamp-3 mb-7">Simplifying your home finding hassles with hundreds of luxurious properties</div>
                            <a class="px-8 py-3 rounded-full bg-blue-900 text-white">more</a>
                        </div>
                    </div>
                </div>

                <div class="xs:w-full sm:w-1/2 md:w-1/3 lg:w-1/4 h-fit py-3 px-2">
                    <div class="rounded shadow-lg h-auto py-5 px-2 w-full border border-slate-50 hover:border-slate-900 text-center">
                        <div class="rounded-full w-24 h-28 mt-3 mx-auto">
                            <span class="text-6xl text-blue-700 fab fa-cloudscale"></span>
                        </div>
                        <div class="h-3/5 w-full pb-5">
                            <div class="font-semibold py-4 text-xl text-blue-800 text-center text-ellipsis">
                                Architectural Design
                            </div>
                            <div class="text-lg text-slate-600 text-center line-clamp-3 mb-7">One of the great beauties of architecture is that each time, it is like life starting all over again</div>
                            <a class="px-8 py-3 rounded-full bg-blue-900 text-white">more</a>
                        </div>
                    </div>
                </div>

                <div class="xs:w-full sm:w-1/2 md:w-1/3 lg:w-1/4 h-fit py-3 px-2">
                    <div class="rounded shadow-lg h-auto py-5 px-2 w-full border border-slate-50 hover:border-slate-900 text-center">
                        <div class="rounded-full w-24 h-28 mt-3 mx-auto">
                            <span class="text-6xl text-blue-700 fas fa-building"></span>
                        </div>
                        <div class="h-3/5 w-full pb-5">
                            <div class="font-semibold py-4 text-xl text-blue-800 text-center text-ellipsis">
                                General Construction
                            </div>
                            <div class="text-lg text-slate-600 text-center line-clamp-3 mb-7">You can dream, create, design, and build the most wonderful place in the world. But it requires people to make the dream a reality</div>
                            <a class="px-8 py-3 rounded-full bg-blue-900 text-white">more</a>
                        </div>
                    </div>
                </div>

                <div class="xs:w-full sm:w-1/2 md:w-1/3 lg:w-1/4 h-fit py-3 px-2">
                    <div class="rounded shadow-lg h-auto py-5 px-2 w-full border border-slate-50 hover:border-slate-900 text-center">
                        <div class="rounded-full w-24 h-28 mt-3 mx-auto">
                            <span class="text-6xl text-blue-700 fas fa-business-time"></span>
                        </div>
                        <div class="h-3/5 w-full pb-5">
                            <div class="font-semibold py-4 text-xl text-blue-800 text-center text-ellipsis">
                                General Commerce
                            </div>
                            <div class="text-lg text-slate-600 text-center line-clamp-3 mb-7">We take most of the money that we could have spent on paid advertising and instead put it back into the customer experience. Then we let the customers be our marketing</div>
                            <a class="px-8 py-3 rounded-full bg-blue-900 text-white">more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF SERVICES -->



        <!-- Our works or products -->
        <!-- Latest -->
        <div class="w-full h-auto md:h-screen bg-slate-900 py-12">
            
            <div class="w-11/12 md:w-5/6 mx-auto text-2xl text-slate-100 text-center font-semibold py-2">Latest Deals</div>
            <div class="w-11/12 md:w-5/6 mx-auto text-slate-500 text-center mb-4">Don't think about it's current value. <br>Think about it's future value</div>
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
        <div class="w-11/12 md:w-5/6 h-auto grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mx-auto mt-4 py-12 items-stretch" >
            @if(count($assets)>0)
                @foreach($assets as $value)
                <x-generic-item2 :data="$value"/>
                @endforeach
            @endif
        </div>

        <!-- Our core values and interests -->
        <div class="w-full h-auto lg:grid grid-cols-5 bg-blue-900 justify-center">
            <div class="w-full col-span-3 rounded-2xl h-auto">
                <video class=" object-contain object-center w-5/6 mx-auto h-full" src="{{asset('storage/asset_images/dev_video.mp4')}}" controls></video>
            </div>
            <div class="w-11/12 col-span-2 md:px-8 rounded-2xl h-auto sm:grid grid-cols-3 mx-auto">
                <div class="col-span-3 text-center text-2xl text-stone-100 font-semibold py-10">Core Values <br> <span class="text-sm capitalize">our standards at the core</span></div>
                <!-- <hr class="col-span-3"> -->
                <div class="col-span-3 h-full flex flex-wrap items-bottom align-center justify-evenly">
                    <!-- single item -->
                    <div class="flex-1 my-3 mx-2 bg-black border-l-2 border-l-white rounded-r-lg px-3 py-4 h-auto" style="min-width: 8rem;">
                        <div class="w-5/6 mx-auto py-1 text-center text-lg font-medium text-white">Commitment</div>
                        <div class="w-5/6 mx-auto py-1 text-center text-base font-normal text-gray-300">You are our pillars, we ensure the security of your request. </div>
                    </div>

                    <!-- single item -->
                    <div class="flex-1 my-3 mx-2 bg-black border-l-2 border-l-white rounded-r-lg px-3 py-4 h-auto" style="min-width: 8rem;">
                        <div class="w-5/6 mx-auto py-1 text-center text-lg font-medium text-white">Simplicity</div>
                        <div class="w-5/6 mx-auto py-1 text-center text-base font-normal text-gray-300"> You are at the center of our process design. Straight forward and concise. </div>
                    </div>

                    <!-- single item -->
                    <div class="flex-1 my-3 mx-2 bg-black border-l-2 border-l-white rounded-r-lg px-3 py-4 h-auto" style="min-width: 8rem;">
                        <div class="w-5/6 mx-auto py-1 text-center text-lg font-medium text-white">Excellence</div>
                        <div class="w-5/6 mx-auto py-1 text-center text-base font-normal text-gray-300"> Our service grade is second to none. Confirm it yourself.  </div>
                    </div>
                
                    <!-- single item -->
                    <div class="flex-1 my-3 mx-2 bg-black border-l-2 border-l-white rounded-r-lg px-3 py-4 h-auto" style="min-width: 8rem;">
                        <div class="w-5/6 mx-auto py-1 text-center text-lg font-medium text-white">Innovation</div>
                        <div class="w-5/6 mx-auto py-1 text-center text-base font-normal text-gray-200"> Our service grade is second to none. Confirm it yourself.  </div>
                    </div>

                    <!-- single item -->
                    <div class="flex-1 my-3 mx-2 bg-black border-l-2 border-l-white rounded-r-lg px-3 py-4 h-auto" style="min-width: 8rem;">
                        <div class="w-5/6 mx-auto py-1 text-center text-lg font-medium text-white top-0 left-0">Proactivity</div>
                        <div class="w-5/6 mx-auto py-1 text-center text-base font-normal text-gray-200"> Our service grade is second to none. Confirm it yourself.  </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Our users testify -->
        <div class="w-full h-auto bg-sky-50 py-12 justify-center">
            <div class="w-11/12  md:w-5/6 md:px-16 rounded-2xl h-auto md:grid grid-cols-3 mx-auto">
                <div class="col-span-3 text-center text-2xl text-slate-900 font-semibold py-10">Our Customers <br><span class="text-sm capitalize">they are satisfied</span></div>
                <!-- <hr class="col-span-3"> -->
                <div class="col-span-3 h-full flex flex-wrap items-bottom align-center justify-evenly">
                    <!-- single item -->
                    <div class=" my-3 mx-2 bg-slate-900 border border-l-4 border-blue-500 rounded-full px-3 pb-4 h-52 w-52 md:h-60 md:w-60 max-w-full relative">
                        <div class="h-2/5 w-5/12 bg-blue-500 mx-auto rounded-full absolute"><img src="{{asset('img/customer1.jpeg')}}" class="w-full h-full rounded-full"></div>
                        <div class="w-5/6 h-full bottom-1/5 mx-auto flex flex-col justify-end  pb-2 pt-8 text-center text-sm font-light italic text-gray-300"><span class="font-bold ">Mdm Vandella Juallu</span><span class="text-xs">Tel: +237672908239, vandejual@mail.com</span> <br> <a class=" px-6 py-2 w-fit border rounded-full mx-auto border-slate-900 text-slate-900 text-base font-semibold bg-white">more</a> </div>
                    </div>
                    <!-- single item -->
                    <div class=" my-3 mx-2 bg-slate-900 border border-l-4 border-blue-500 rounded-full px-3 pb-4 h-52 w-52 md:h-60 md:w-60 max-w-full relative">
                        <div class="h-2/5 w-5/12 bg-blue-500 mx-auto rounded-full absolute"><img src="{{asset('img/customer1.jpeg')}}" class="w-full h-full rounded-full"></div>
                        <div class="w-5/6 h-full bottom-1/5 mx-auto flex flex-col justify-end  pb-2 pt-8 text-center text-sm font-light italic text-gray-300"><span class="font-bold ">Mdm Vandella Juallu</span><span class="text-xs">Tel: +237672908239, vandejual@mail.com</span> <br> <a class=" px-6 py-2 w-fit border rounded-full mx-auto border-slate-900 text-slate-900 text-base font-semibold bg-white">more</a> </div>
                    </div>
                    <!-- single item -->
                    <div class=" my-3 mx-2 bg-slate-900 border border-l-4 border-blue-500 rounded-full px-3 pb-4 h-52 w-52 md:h-60 md:w-60 max-w-full relative">
                        <div class="h-2/5 w-5/12 bg-blue-500 mx-auto rounded-full absolute"><img src="{{asset('img/customer1.jpeg')}}" class="w-full h-full rounded-full"></div>
                        <div class="w-5/6 h-full bottom-1/5 mx-auto flex flex-col justify-end  pb-2 pt-8 text-center text-sm font-light italic text-gray-300"><span class="font-bold ">Mdm Vandella Juallu</span><span class="text-xs">Tel: +237672908239, vandejual@mail.com</span> <br> <a class=" px-6 py-2 w-fit border rounded-full mx-auto border-slate-900 text-slate-900 text-base font-semibold bg-white">more</a> </div>
                    </div>
                    <!-- single item -->
                    <div class=" my-3 mx-2 bg-slate-900 border border-l-4 border-blue-500 rounded-full px-3 pb-4 h-52 w-52 md:h-60 md:w-60 max-w-full relative">
                        <div class="h-2/5 w-5/12 bg-blue-500 mx-auto rounded-full absolute"><img src="{{asset('img/customer1.jpeg')}}" class="w-full h-full rounded-full"></div>
                        <div class="w-5/6 h-full bottom-1/5 mx-auto flex flex-col justify-end  pb-2 pt-8 text-center text-sm font-light italic text-gray-300"><span class="font-bold ">Mdm Vandella Juallu</span><span class="text-xs">Tel: +237672908239, vandejual@mail.com</span> <br> <a class=" px-6 py-2 w-fit border rounded-full mx-auto border-slate-900 text-slate-900 text-base font-semibold bg-white">more</a> </div>
                    </div>

                    
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="w-full h-auto border-y-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.3234487756235!2d9.284495013744113!3d4.156663596977882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106131fb28383773%3A0xe0908049832295fd!2sPROPERTY%20TRUST!5e0!3m2!1sen!2scm!4v1679866113967!5m2!1sen!2scm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mx-auto"></iframe>
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

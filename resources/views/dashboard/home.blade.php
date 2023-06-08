@extends('dashboard.main')
@section('content')
    <div class="">
        <!-- STATISTICS -->
        <div class="md:grid grid-cols-3">



            <div class="sm:grid grid-cols-2 py-4 col-span-2">
                <!-- Container for demo purpose -->
                <div class="container my-4 mx-auto md:px-6">
                    <!-- Section: Design Block -->
                    <section class="mb-32 text-center">

                        <div class="grid md:grid-cols-6 lg:gap-x-16">
                            <div class="mb-12 md:mb-0">
                                <div class="mb-6 inline-block rounded-md bg-primary-100 p-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                                </svg>
                                </div>
                                <h3 class="mb-4 text-2xl font-bold text-primary dark:text-primary-400">
                                1000
                                </h3>
                                <h5 class="text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                Happy customers
                                </h5>
                            </div>

                            <div class="mb-12 md:mb-0">
                                <div class="mb-6 inline-block rounded-md bg-primary-100 p-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                </svg>
                                </div>
                                <h3 class="mb-4 text-2xl font-bold text-primary dark:text-primary-400">
                                70%
                                </h3>
                                <h5 class="text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                Growth
                                </h5>
                            </div>

                            <div class="mb-12 md:mb-0">
                                <div class="mb-6 inline-block rounded-md bg-primary-100 p-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                </div>
                                <h3 class="mb-4 text-2xl font-bold text-primary dark:text-primary-400">
                                49
                                </h3>
                                <h5 class="text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                Projects
                                </h5>
                            </div>
                            
                            <div class="mb-12 md:mb-0">
                                <div class="mb-6 inline-block rounded-md bg-primary-100 p-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                                </svg>
                                </div>
                                <h3 class="mb-4 text-2xl font-bold text-primary dark:text-primary-400">
                                1000
                                </h3>
                                <h5 class="text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                Happy customers
                                </h5>
                            </div>

                            <div class="mb-12 md:mb-0">
                                <div class="mb-6 inline-block rounded-md bg-primary-100 p-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                </svg>
                                </div>
                                <h3 class="mb-4 text-2xl font-bold text-primary dark:text-primary-400">
                                70%
                                </h3>
                                <h5 class="text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                Growth
                                </h5>
                            </div>

                            <div class="mb-12 md:mb-0">
                                <div class="mb-6 inline-block rounded-md bg-primary-100 p-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                </div>
                                <h3 class="mb-4 text-2xl font-bold text-primary dark:text-primary-400">
                                49
                                </h3>
                                <h5 class="text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                Projects
                                </h5>
                            </div>
                        </div>
                    </section>
                    <!-- Section: Design Block -->
                </div>
                <!-- Container for demo purpose -->
                
            </div>

            <!--  -->

            <div class="col-span-1 py-4 px-3 md:h-full">
                <div class="rounded-xl bg-white bg-opacity-50 my-4 mx-3 py-3 px-3 h-full">
                    @for($i = 1; $i < 10; $i++)
                        <a href="#" class="block rounded w-full py-2 px-1 my-1 border-y border-blue-100 list-none capitalize">
                            <span class="inline-block w-6 h-6 rounded-full bg-slate-50 text-center" aria-hidden="true"> &ddotseq;</span>
                            <span class="mr-2 inline-block w-6 h-6 rounded-full bg-slate-50 text-red-400 text-center" aria-hidden="true"> 49</span>construction projects
                        </a>
                    @endfor
                    
                </div>
            </div>
        </div>

        <div class="flex flex-wrap">

            <!-- property distribution -->
            <div class="w-11/12 md:w-1/2 mx-auto my-2">
                <div class="w-full h-32  rounded-md border border-slate-400 bg-stone-900 bg-opacity-30">
              
                </div>
            </div>
            <div class="w-11/12 md:w-5/12 mx-auto my-2">
                <div class="w-full h-32  rounded-md border border-slate-400 bg-stone-900 bg-opacity-30"></div>
            </div>
        </div>
    </div>
@endsection

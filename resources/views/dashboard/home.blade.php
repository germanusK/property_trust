@extends('dashboard.main')
@section('content')
    @areachart('ASSET_STATISTICS', 'asset-stats')
    @areachart('CUSTOMER_STATISTICS', 'customer-stats')
    @areachart('SCHEDULE_STATISTICS', 'schedule-stats')
    @piechart('MAIN_CHART', 'chart-main')
    <div class="">
        <!-- STATISTICS -->
        <div class="md:grid grid-cols-3">

            <div class="py-4 col-span-2">
                <!-- Container for demo purpose -->
                <div class="container my-4 mx-auto md:px-6 border-b ">
                    <!-- Section: Design Block -->
                    <section class="text-center">

                        <div class="flex flex-wrap justify-evenly lg:gap-x-16">
                            <div class="mb-12 md:mb-4">
                                <div class="mb-2 inline-block rounded-md bg-primary-100 p-4 text-primary">
                                    <span class="fa-solid fa-compass-drafting"></span>
                                </div>
                                <h3 class="mb-1 text-2xl font-bold text-primary dark:text-primary-400">{{\App\Models\Asset::count()}}</h3>
                                <h5 class="text-lg font-medium text-neutral-500 dark:text-neutral-300">Assets</h5>
                            </div>

                            <div class="mb-12 md:mb-4">
                                <div class="mb-2 inline-block rounded-md bg-primary-100 p-4 text-primary">
                                    <span class="fa-solid fa-bell-concierge"></span>
                                </div>
                                <h3 class="mb-1 text-2xl font-bold text-primary dark:text-primary-400">{{\App\Models\Service::count()}}</h3>
                                <h5 class="text-lg font-medium text-neutral-500 dark:text-neutral-300">Services</h5>
                            </div>

                            <div class="mb-12 md:mb-4">
                                <div class="mb-2 inline-block rounded-md bg-primary-100 p-4 text-primary">
                                    <span class="fa-solid fa-umbrella-beach"></span>
                                </div>
                                <h3 class="mb-1 text-2xl font-bold text-primary dark:text-primary-400">{{\App\Models\Project::count()}}</h3>
                                <h5 class="text-lg font-medium text-neutral-500 dark:text-neutral-300">Projects</h5>
                            </div>
                            
                            <div class="mb-12 md:mb-4">
                                <div class="mb-2 inline-block rounded-md bg-primary-100 p-4 text-primary">
                                    <span class="fa-solid fa-calendar-check"></span>
                                </div>
                                <h3 class="mb-1 text-2xl font-bold text-primary dark:text-primary-400">{{\App\Models\Schedule::count()}}</h3>
                                <h5 class="text-lg font-medium text-neutral-500 dark:text-neutral-300">Schedules</h5>
                            </div>

                            <div class="mb-12 md:mb-4">
                                <div class="mb-2 inline-block rounded-md bg-primary-100 p-4 text-primary">
                                    <span class="fa fa-users"></span>
                                </div>
                                <h3 class="mb-1 text-2xl font-bold text-primary dark:text-primary-400">{{\App\Models\Customer::count()}}</h3>
                                <h5 class="text-lg font-medium text-neutral-500 dark:text-neutral-300">Customers</h5>
                            </div>

                            {{-- <div class="mb-12 md:mb-4">
                                <div class="mb-2 inline-block rounded-md bg-primary-100 p-4 text-primary">
                                    <svg xmlns="https://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <h3 class="mb-1 text-2xl font-bold text-primary dark:text-primary-400">{{$growth}}%</h3>
                                <h5 class="text-lg font-medium text-neutral-500 dark:text-neutral-300">Growth</h5>
                            </div> --}}
                        </div>
                    </section>
                    <!-- Section: Design Block -->
                </div>
                <!-- Container for demo purpose -->
                        
                <div class="md:grid grid-cols-2">

                    <!-- property distribution -->
                    <div class="mx-auto my-2 md:grid grid-cols-2 px-1">
                        <div id="chart-main" class="mx-4 sm:mx-1 col-span-1 md:col-span-2 my-2"></div>
                        <div id="customer-stats" class="mx-4 sm:mx-1 col-span-1 md:col-span-2 my-2"></div>
                    </div>
                    <div class="mx-auto my-2 md:grid grid-cols-2 px-1">
                        <div id="schedule-stats" class="mx-4 sm:mx-1 col-span-1 md:col-span-2 my-2 min-h-max"></div>
                        <div id="asset-stats" class="mx-4 sm:mx-1 col-span-1 md:col-span-2 my-2"></div>
                    </div>
                </div>
            </div>

            <!--  -->

            <div class="col-span-1 py-4 px-3 md:h-full">
                <div class=" bg-slate-800 bg-opacity-50 my-4 mx-3 py-3 px-3 h-full text-start">
                    @foreach(\App\Models\Service::all() as $service)
                        <div href="#" class="block w-full py-2 px-1 my-1 border-y border-slate-200 border-opacity-10 bg-slate-950 bg-opacity-20 list-none capitalize font-bold">
                            <span class="inline-block w-6 h-6 rounded-full bg-stone-950 text-blue-100 text-center mx-2" aria-hidden="true"> &andand;</span>
                            <span class="mr-2 inline-block w-6 h-6 rounded-full bg-slate-50 text-center uppercase" aria-hidden="true"> {{ $service->projects()->count() }}</span> <span class="text-blue-100">{{ $service->name }} projects </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

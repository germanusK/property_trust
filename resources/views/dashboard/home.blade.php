@extends('dashboard.main')
@section('content')
    <div class="">
        <!-- STATISTICS -->
        <div class="md:grid grid-cols-3">



            <div class="sm:grid grid-cols-2 py-4 col-span-2">
                <!-- statistics item -->
                <div class=" col-span-1 border-x-4 border-x-slate-100 my-4 flex flex-wrap py-3 bg-white shadow-md rounded-lg">
                    <h4 class="text-green-500 flex justify-between pb-1 w-full border-b border-b-slate-300 capitalize"><span><span class=" font-bold">heading</span>|period</span><button class="px-3"><i class="fas fa-ellipsis-h fa-lg fa-fw"></i></button></h4>
                    <div class="flex px-2 mt-4">
                        <span class="text-blue-500 w-16 h-16 text-center bg-green-100 text-3xl py-3 rounded-full fas fa-mail-bulk"></span>
                    </div>
                    <div class="flex-auto h-full align-middle justify-center items-center mt-4">
                        <div class="block w-full">
                            <h3 class="font-bold text-blue-500 text-center">{{\App\Models\Message::count()}}</h3>
                            <h5 class="text-center text-blue-500">new messages</h5>
                        </div>
                    </div>
                </div>
    
    
                <!-- statistics item -->
                <div class=" col-span-1 border-x-4 border-x-slate-100 my-4 flex flex-wrap py-3 bg-white shadow-md rounded-lg">
                    <h4 class="text-green-500 flex justify-between pb-1 w-full border-b border-b-slate-300 capitalize"><span><span class=" font-bold">heading</span>|period</span><button class="px-3"><i class="fas fa-ellipsis-h fa-lg fa-fw"></i></button></h4>
                    <div class="flex px-2 mt-4">
                        <span class="text-blue-500 w-16 h-16 text-center bg-green-100 text-3xl py-3 rounded-full fas fa-project-diagram"></span>
                    </div>
                    <div class="flex-auto h-full align-middle justify-center items-center mt-4">
                        <div class="block w-full">
                            <h3 class="font-bold text-blue-500 text-center">{{\App\Models\Asset::count()}}</h3>
                            <h5 class="text-center text-blue-500">new property</h5>
                        </div>
                    </div>
                </div>
    
                <!-- statistics item -->
                <div class=" col-span-1 border-x-4 border-x-slate-100 my-4 flex flex-wrap py-3 bg-white shadow-md rounded-lg">
                    <h4 class="text-green-500 flex justify-between pb-1 w-full border-b border-b-slate-300 capitalize"><span><span class=" font-bold">heading</span>|period</span><button class="px-3"><i class="fas fa-ellipsis-h fa-lg fa-fw"></i></button></h4>
                    <div class="flex px-2 mt-4">
                        <span class="text-blue-500 w-16 h-16 text-center bg-green-100 text-3xl py-3 rounded-full fas fa-clock"></span>
                    </div>
                    <div class="flex-auto h-full align-middle justify-center items-center mt-4">
                        <div class="block w-full">
                            <h3 class="font-bold text-blue-500 text-center">{{\App\Models\Schedule::where(['status'=>'pending'])->count()}}</h3>
                            <h5 class="text-center text-blue-500">pending schedules</h5>
                        </div>
                    </div>
                </div>
    
                <!-- statistics item -->
                <div class=" col-span-1 border-x-4 border-x-slate-100 my-4 flex flex-wrap py-3 bg-white shadow-md rounded-lg">
                    <h4 class="text-green-500 flex justify-between pb-1 w-full border-b border-b-slate-300 capitalize"><span><span class=" font-bold">heading</span>|period</span><button class="px-3"><i class="fas fa-ellipsis-h fa-lg fa-fw"></i></button></h4>
                    <div class="flex px-2 mt-4">
                        <span class="text-blue-500 w-16 h-16 text-center bg-green-100 text-3xl py-3 rounded-full fab fa-buysellads"></span>
                    </div>
                    <div class="flex-auto h-full align-middle justify-center items-center mt-4">
                        <div class="block w-full">
                            <h3 class="font-bold text-blue-500 text-center">{{\App\Models\Customer::count()}}</h3>
                            <h5 class="text-center text-blue-500">customers</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!--  -->

            <div class="col-span-1 py-4 px-3 md:h-full">
                <div class="rounded-xl bg-white my-4 mx-3 py-3 px-3 h-full">
                    <a href="#" class="block rounded w-full py-2 px-1 my-1 border-y border-blue-100 list-none capitalize">
                        <span class="inline-block w-6 h-6 rounded-full bg-slate-50 text-center" aria-hidden="true"> &ddotseq;</span>
                        <span class="mr-2 inline-block w-6 h-6 rounded-full bg-slate-50 text-red-400 text-center" aria-hidden="true"> 49</span>construction projects
                    </a>
                    <a href="#" class="block rounded w-full py-2 px-1 my-1 border-y border-blue-100 list-none capitalize">
                        <span class="inline-block w-6 h-6 rounded-full bg-slate-50 text-center" aria-hidden="true"> &ddotseq;</span>
                        <span class="mr-2 inline-block w-6 h-6 rounded-full bg-slate-50 text-red-400 text-center" aria-hidden="true"> 49</span>construction projects
                    </a>
                    <a href="#" class="block rounded w-full py-2 px-1 my-1 border-y border-blue-100 list-none capitalize">
                        <span class="inline-block w-6 h-6 rounded-full bg-slate-50 text-center" aria-hidden="true"> &ddotseq;</span>
                        <span class="mr-2 inline-block w-6 h-6 rounded-full bg-slate-50 text-red-400 text-center" aria-hidden="true"> 49</span>construction projects
                    </a>
                    <a href="#" class="block rounded w-full py-2 px-1 my-1 border-y border-blue-100 list-none capitalize">
                        <span class="inline-block w-6 h-6 rounded-full bg-slate-50 text-center" aria-hidden="true"> &ddotseq;</span>
                        <span class="mr-2 inline-block w-6 h-6 rounded-full bg-slate-50 text-red-400 text-center" aria-hidden="true"> 49</span>construction projects
                    </a>
                    <a href="#" class="block rounded w-full py-2 px-1 my-1 border-y border-blue-100 list-none capitalize">
                        <span class="inline-block w-6 h-6 rounded-full bg-slate-50 text-center" aria-hidden="true"> &ddotseq;</span>
                        <span class="mr-2 inline-block w-6 h-6 rounded-full bg-slate-50 text-red-400 text-center" aria-hidden="true"> 49</span>construction projects
                    </a>
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

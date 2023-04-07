@extends('dashboard.main')
@section('content')
    <div class="">
        <!-- STATISTICS -->
        <div class="flex flex-wrap items-start justify-between align-top self-center mx-auto py-4">
            <!-- statistics item -->
            <div class="w-3/4 sm:w-5/12 lg:w-1/4 mx-2 my-4 flex py-3 bg-gradient-to-t from-blue-300 to-green-100 rounded-xl">
                <div class="flex px-2">
                    <span class="text-blue-500 text-3xl py-3 px-4 rounded-full fas fa-mail-bulk"></span>
                </div>
                <div class="flex-auto h-full align-middle justify-center items-center">
                    <div class="block w-full">
                        <h3 class="font-bold text-blue-500 text-center">{{\App\Models\Message::count()}}</h3>
                        <h5 class="text-center text-blue-500">new messages</h5>
                    </div>
                </div>
            </div>


            <!-- statistics item -->
            <div class="w-3/4 sm:w-5/12 lg:w-1/4 mx-2 my-4 flex py-3 bg-gradient-to-t from-blue-300 to-green-100 rounded-xl">
                <div class="flex px-2">
                    <span class="text-blue-500 text-3xl py-3 px-4 rounded-full fas fa-project-diagram"></span>
                </div>
                <div class="flex-auto h-full align-middle justify-center items-center">
                    <div class="block w-full">
                        <h3 class="font-bold text-blue-500 text-center">{{\App\Models\Asset::count()}}</h3>
                        <h5 class="text-center text-blue-500">new property</h5>
                    </div>
                </div>
            </div>

            <!-- statistics item -->
            <div class="w-3/4 sm:w-5/12 lg:w-1/4 mx-2 my-4 flex py-3 bg-gradient-to-t from-blue-300 to-green-100 rounded-xl">
                <div class="flex px-2">
                    <span class="text-blue-500 text-3xl py-3 px-4 rounded-full fas fa-clock"></span>
                </div>
                <div class="flex-auto h-full align-middle justify-center items-center">
                    <div class="block w-full">
                        <h3 class="font-bold text-blue-500 text-center">{{\App\Models\Schedule::where(['status'=>'pending'])->count()}}</h3>
                        <h5 class="text-center text-blue-500">pending schedules</h5>
                    </div>
                </div>
            </div>

            <!-- statistics item -->
            <div class="w-3/4 sm:w-5/12 lg:w-1/4 mx-2 my-4 flex py-3 bg-gradient-to-t from-blue-300 to-green-100 rounded-xl">
                <div class="flex px-2">
                    <span class="text-blue-500 text-3xl py-3 px-4 rounded-full fas fa-clone"></span>
                </div>
                <div class="flex-auto h-full align-middle justify-center items-center">
                    <div class="block w-full">
                        <h3 class="font-bold text-blue-500 text-center">{{\App\Models\Message::where(['type'=>'order'])->count()}}</h3>
                        <h5 class="text-center text-blue-500">new orders</h5>
                    </div>
                </div>
            </div>

            <!-- statistics item -->
            <div class="w-3/4 sm:w-5/12 lg:w-1/4 mx-2 my-4 flex py-3 bg-gradient-to-t from-blue-300 to-green-100 rounded-xl">
                <div class="flex px-2">
                    <span class="text-blue-500 text-3xl py-3 px-4 rounded-full fab fa-buysellads"></span>
                </div>
                <div class="flex-auto h-full align-middle justify-center items-center">
                    <div class="block w-full">
                        <h3 class="font-bold text-blue-500 text-center">{{\App\Models\Customer::count()}}</h3>
                        <h5 class="text-center text-blue-500">customers</h5>
                    </div>
                </div>
            </div>

            
        </div>

        <div class="flex flex-wrap">

            <!-- property distribution -->
            <div class="w-11/12 md:w-1/2 mx-auto my-2">
                <div class="w-full h-32  rounded-md border border-slate-400 bg-stone-900 bg-opacity-30"></div>
            </div>
            <div class="w-11/12 md:w-5/12 mx-auto my-2">
                <div class="w-full h-32  rounded-md border border-slate-400 bg-stone-900 bg-opacity-30"></div>
            </div>
        </div>
    </div>
@endsection
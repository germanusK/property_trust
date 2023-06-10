<x-head/>
<body>
    <x-header-alt/>
    <div class="w-full">
        <div class="py-12 w-11/12 md:w-5/6 mx-auto">
            <!-- image of item to book visit for -->
            <div class="shadow-inner shadow-slate-900 border flex items-center justify-center align-middle pr-2 bg-slate-950 rounded-md">
                <div class=" hidden sm:block sm:w-1/3 md:w-1/2 h-full ">
                    <div class="rounded shadow-inner bg-stone-200 relative h-full">
                        <div class="absolute w-full h-full bg-slate-900 bg-opacity-70 flex flex-col justify-center text-gray-100">
                            <div class="text-center text-lg font-semibold text-color-1">{{$data->name}}</div>
                            <div class="text-center font-bold text-color-2">{{$data->categories->first()->name}} : {{$data->grades->first()->name}}</div>
                            <div class="text-center text-md text-color-default">{{$data->description}}</div>
                        </div>
                        <img src="{{ asset($data->images->first()->url ?? '') }}" alt="" class=" w-full h-full rounded-left">
                    </div>
                </div>
                <div class="w-5/6 sm:w-2/3 mx-auto px-3 bg-white">
                    <form method="post" class="flex flex-wrap w-full">
                        @csrf
                        <div class="w-full py-4 text-center font-bold text-blue-900 text-2xl">
                            Book a visit
                        </div>
                        <div class="w-full md:w-4/5 mx-auto px-2">
                            <div class="py-1 my-1 px-3 border-b">
                                <label for="name" class="text-blue-900 font-extralight italic capitalize">name:</label><br>
                                <input type="text" required class="w-11/12 py-1 text-base text-slate-600 rounded-sm" name="name" placeholder="your name here">
                            </div>
                            <div class="py-1 my-1 px-3 border-b">
                                <label for="email" class="text-blue-900 font-extralight italic capitalize">email:</label><br>
                                <input type="email" required class="w-11/12 py-1 text-base text-slate-600 rounded-sm" name="email" placeholder="your email here">
                            </div>
                            <div class="py-1 my-1 px-3 border-b">
                                <label for="contact" class="text-blue-900 font-extralight italic capitalize">contact:</label><br>
                                <input type="tel" class="w-11/12 py-1 text-base text-slate-600 rounded-sm" name="contact" placeholder="your contact here">
                            </div>
                            <div class="py-1 my-1 px-3 border-b">
                                <label for="due_time" class="text-blue-900 font-extralight italic capitalize">Due time:</label><br>
                                <input type="datetime-local" required class="w-11/12 py-1 text-base text-slate-800 rounded-sm" name="due_date" placeholder="choose date">
                            </div>
                            <input type="hidden" name="asset_id" id="" value="{{ $data['id'] }}">
                            
                        </div>
                        <hr class="w-full my-4 opacity-10">
                        <div class="w-full px-2 items-center justify-center">
                            <button type="submit" formaction="{{ url('/bookVisit/'.$data['id']) }}" class="text-slate-600 rounded-sm px-5 py-2 mx-auto my-3 border border-stone-500 lowercase font-light self-center block">submit</button>
                        </div>
                    </form>
                    <script>
                        
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-blue-900">
        <x-footer/>
    </div>
</body>
</html>
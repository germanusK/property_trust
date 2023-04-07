<x-head/>
<body>
    <x-header-alt/>
    <div class="w-full">
        <div class="py-12 w-11/12 md:w-5/6 mx-auto">
            <!-- image of item to book visit for -->
            <div class="py-6 shadow-inner shadow-slate-900 flex flex-wrap px-2 align-middle items-center bg-white rounded">
                <div class="w-1/2 hidden sm:block sm:w-1/3">
                    <div class="rounded py-4 px-2 shadow-inner bg-stone-200">
                        <img src="{{ $data->images->first()->url ?? '' }}" alt="" class=" mx-auto h-auto rounded-xl mb-2">
                        <div class="text-center text-lg font-semibold text-color-1">{{$data->name}}</div>
                        <div class="text-center font-bold text-color-2">{{$data->categories->first()->name}} : {{$data->grades->first()->name}}</div>
                        <div class="text-center text-md text-color-default">{{$data->description}}</div>
                    </div>
                </div>
                <div class="w-5/6 sm:w-2/3 mx-auto px-3">
                    <form method="post" class="flex flex-wrap w-full">
                        @csrf
                        <div class="w-full py-4 text-center font-bold text-blue-900 text-2xl">
                            Book a visit
                        </div>
                        <div class="w-full md:w-4/5 mx-auto px-2">
                            <div class="py-1 my-1 px-3">
                                <label for="name" class="text-blue-900 font-extralight italic capitalize">name:</label><br>
                                <input type="text" required class="w-11/12 py-1 text-base text-slate-600 rounded-sm focus:rounded-md" name="name" placeholder="your name here">
                            </div>
                            <div class="py-1 my-1 px-3">
                                <label for="email" class="text-blue-900 font-extralight italic capitalize">email:</label><br>
                                <input type="email" required class="w-11/12 py-1 text-base text-slate-600 rounded-sm focus:rounded-md" name="email" placeholder="your email here">
                            </div>
                            <div class="py-1 my-1 px-3">
                                <label for="contact" class="text-blue-900 font-extralight italic capitalize">contact:</label><br>
                                <input type="tel" class="w-11/12 py-1 text-base text-slate-600 rounded-sm focus:rounded-md" name="contact" placeholder="your contact here">
                            </div>
                            <div class="py-1 my-1 px-3">
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
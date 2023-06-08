<div class="w-11/12 md:w-5/6 h-auto mx-auto py-12 my-12">
    <div class="w-full text-center text-2xl font-semibold text-stone-900 py-4 mb-6">Attending to Your Request:</div>

    <div class="md:grid grid-cols-3">
        <div class="col-span-1 flex flex-col h-full items-center justify-evenly py-4">
    
            <button onclick="setContactForm(1)" class="block px-3 py-2 border-y border-y-blue-200 bg-blue-900 hover:bg-stone-200 shadow shadow-slate-600 w-full hover:cursor-zoom-out">
                <div class="text-xl font-semibold text-stone-100 hover:text-blue-900 py-1 text-center uppercase">make an order</div>
                <!-- <div class="text-lg font-normal text-stone-600 py-1 line-clamp-3">We will help you get property of your type</div> -->
            </button>
    
            <button onclick="setContactForm(2)" class="block px-3 py-2 border-y border-y-blue-200 bg-blue-900 hover:bg-stone-200 shadow shadow-slate-600 w-full hover:cursor-zoom-out">
                <div class="text-xl font-semibold text-stone-100 hover:text-blue-900 py-1 text-center uppercase">report a problem</div>
                <!-- <div class="text-lg font-normal text-stone-600 py-1 line-clamp-3">Together, we are taking the pain</div> -->
            </button>
    
            <button onclick="setContactForm(3)" class="block px-3 py-2 border-y border-y-blue-200 bg-blue-900 hover:bg-stone-200 shadow shadow-slate-600 w-full hover:cursor-zoom-out">
                <div class="text-xl font-semibold text-stone-100 hover:text-blue-900 py-1 text-center uppercase">send a message</div>
                <!-- <div class="text-lg font-normal text-stone-600 py-1 line-clamp-3">Your own opinion has a place with us</div> -->
            </button>
        </div>

        <div class="col-span-2 border border-black rounded-xl bg-blue-900 px-6">
            <form action="" method="post" class=" py-2 bg-white">
                <div class="w-full md:grid grid-cols-4">
                    <label for="name" class=" text-md text-capitalize md:col-span-1 text-blue-700">Enter your name:</label><br>
                    <div class="md:col-span-3"><input type="text" name="name" id="" class="w-full text-lg border-0 border-b border-b-blue-900 py-1 my-1" placeholder="enter your name"></div>
                    
                </div>
                <div class="w-full md:grid grid-cols-4">
                    <label for="email" class=" text-md text-capitalize md:col-span-1 text-blue-700">Enter your email:</label><br>
                    <div class="md:col-span-3">
                        <input type="email" name="email" id="" class="w-full text-lg border-0 border-b border-b-blue-900 py-1 my-1" placeholder="enter your email">
                    </div>
                </div>
                <div class="w-full md:grid grid-cols-4">
                    <label for="contact" class=" text-md text-capitalize md:col-span-1 text-blue-700">Enter your contact:</label><br>
                    <div class="md:col-span-3">
                        <input type="tel" name="name" id="" class="w-full text-lg border-0 border-b border-b-blue-900 py-1 my-1" placeholder="enter your contact">
                    </div>
                </div>
                <br>
                <div class="w-full md:grid grid-cols-4">
                    <label for="description" class=" text-md text-capitalize md:col-span-1 text-blue-700">Item description:</label><br>
                    <div class="md:col-span-3">
                        <textarea type="text" name="description" rows="3" id="" class="w-full text-lg border-0 border-b border-b-blue-900 py-1 my-1" placeholder="Item description and specifications"></textarea>
                    </div>
                </div>
                <br>
                <div class="w-full items-end justify-end justify-self-end p-1 relative">
                    <button type="submit" class="px-5 py-1 rounded bg-blue-900 hover:bg-stone-900 text-white absolute right-0 left-auto bottom-0">send</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
        
    function setContactForm(n){
        document.querySelectorAll(".contactFormBox > *").forEach((value, key, parent)=>{
            if (key == n-1) {
                value.classList.remove("hidden");
            }
            else
                value.classList.add("hidden");
        });
        return;
    }
</script>
<x-head/>
<body>
    <x-header-alt/>
    
    <div class="w-full">
        <div class="flex justify-center text-center text-base font-semibold my-6">
            <span><a class="text-blue-900" href="{{url('/')}}">Home</a> : <span class="text-blue-600">Contact Us</span></span>
        </div>
        <div class="w-full pt-12">
            
            <div class=" shadow-inner bg-neutral-400 py-12">
                <div class="w-full h-auto mb-4 flex flex-wrap items-center align-middle justify-around">
                    <div class="w-full md:w-3/4 lg:w-3/4">
                        <div class="w-full max-w-lg px-4 py-6 rounded-md shadow bg-neutral-700 mx-auto">
                            <form method="post" action="" id="contact_form">
                                <input type="text" class="text-lg text-slate-900 placeholder-slate-700 h-12 w-full border border-slate-900 bg-neutral-200 rounded px-3 my-3" name="name" placeholder="enter your name here" required>
                                <input type="email" class="text-lg text-slate-900 placeholder-slate-700 h-12 w-full border border-slate-900 bg-neutral-200 rounded px-3 my-3" name="email" placeholder="enter your email here; optional">
                                <input type="tel" class="text-lg text-slate-900 placeholder-slate-700 h-12 w-full border border-slate-900 bg-neutral-200 rounded px-3 my-3" name="tel" placeholder="enter your phone number here; optional if email provided">
                                <textarea class="text-lg text-slate-900 placeholder-slate-700 h-28 w-full border border-slate-900 bg-neutral-200 rounded px-3 my-3" name="message" placeholder="enter message here" required></textarea>
                                <div class="flex justify-end my-3">
                                    <input type="submit" class="h-12 px-8 rounded border border-slate-900 hover:bg-slate-200 font-semibold text-base text-slate-100" value="send" onclick="event.preventDefault(); confirm('You are about to send messgae') ? $('#contact_form').submit()">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="w-full md:w-1/4 lg:w-1/4">
                        <div class="w-full flex flex-wrap justify-evenly py-8">
                            <div class="m-4">
                                <a href="" class=" flex w-12 h-12 sm:w-16 sm:h-16 items-center justify-center align-middle text-center rounded-full border bg-slate-300"><span class="fab fa-twitter inline text-4xl text-blue-800"></span></a>
                            </div>
                            <div class="m-4">
                                <a href="" class=" flex w-12 h-12 sm:w-16 sm:h-16 items-center justify-center align-middle text-center rounded-full border bg-slate-300"><span class="fab fa-facebook-f inline text-4xl text-blue-800"></span></a>
                            </div>
                            <div class="m-4">
                                <a href="" class=" flex w-12 h-12 sm:w-16 sm:h-16 items-center justify-center align-middle text-center rounded-full border bg-slate-300"><span class="fab fa-instagram inline text-4xl text-blue-800"></span></a>
                            </div>
                            <div class="m-4">
                                <a href="" class=" flex w-12 h-12 sm:w-16 sm:h-16 items-center justify-center align-middle text-center rounded-full border bg-slate-300"><span class="fab fa-whatsapp inline text-4xl text-blue-800"></span></a>
                            </div>
                            <div class="m-4">
                                <a href="" class=" flex w-12 h-12 sm:w-16 sm:h-16 items-center justify-center align-middle text-center rounded-full border bg-slate-300"><span class="fab fa-telegram inline text-4xl text-blue-800"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-5/6 mx-auto flex flex-wrap justify-evenly py-12">
                <div class="justify-center items-center">
                    <div class="w-12 h-12 text-blue-800 mx-auto"><span class="fa fa-envelope text-4xl"></span></div>
                    <div class="text-center text-slate-700 text-sm italic font-medium">customer@bproperty_trust.com</div>
                </div>
                <div class="justify-center items-center">
                    <div class="w-12 h-12 text-blue-800 mx-auto"><span class="fa fa-phone text-4xl"></span></div>
                    <div class="text-center text-slate-700 text-sm italic font-medium">customer@bproperty_trust.com</div>
                </div>
                <div class="justify-center items-center">
                    <div class="w-12 h-12 text-blue-800 mx-auto"><span class="fa fa-globe text-4xl"></span></div>
                    <div class="text-center text-slate-700 text-sm italic font-medium">customer@bproperty_trust.com</div>
                </div>
                <div class="justify-center items-center">
                    <div class="w-12 h-12 text-blue-800 mx-auto"><span class="fa fa-envelope text-4xl"></span></div>
                    <div class="text-center text-slate-700 text-sm italic font-medium">customer@bproperty_trust.com</div>
                </div>
            </div>

            <div class="w-full h-auto flex flex-wrap items-center align-middle justify-around">
                <div class="w-full h-auto border-y-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.3234487756235!2d9.284495013744113!3d4.156663596977882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106131fb28383773%3A0xe0908049832295fd!2sPROPERTY%20TRUST!5e0!3m2!1sen!2scm!4v1679866113967!5m2!1sen!2scm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mx-auto"></iframe>
                </div>
            </div>
            
        </div>
    </div>
    <div class="bg-blue-900 ">
        <x-footer/>
    </div>
</body>
</html>
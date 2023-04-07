<x-head></x-head>
<body>
    <div class="w-full">
        <x-header-alt/>
        <div class="w-full mx-auto">
            <div class="flex justify-center text-center text-base font-semibold my-6">
                <span><a class="text-blue-900" href="{{url('/')}}">Home</a> : <span class="text-blue-600">Our Property</span></span>
            </div>
            <x-real-property></x-real-property>
        </div>
        <div class="w-full h-auto bg-blue-900">
            <x-footer></x-footer>
        </div>
    </div>
</body>
</html>
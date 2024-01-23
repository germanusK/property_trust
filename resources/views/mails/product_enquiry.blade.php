<x-head/>
    <body class="py-3 bg-white font-semibold font-sans">
        <div class="py-2 bg-white text-sky-600 text-center text-xl font-bold">{{$subject}}</div>
        <hr class="w-full">
        <div class="py-2 bg-white text-lg text-sky-900">
            <span class="text-sky-800 text-lg font-bold">{{env('APP_NAME') ?? 'PT.GROUP'}}</span> Service booking  {{$data['address']}} for <a href="{{$data['url'] ?? '#'}}" class=" text-blue-500 font-bold">{{$data['name']}}</a>
            {{ $text_content }}
            <hr>
        </div>
    </body>
</html>
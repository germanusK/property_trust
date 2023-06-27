<x-head/>
    <body class="py-3 bg-white font-semibold font-sans">
        <div class="py-2 bg-white text-sky-600 text-center text-xl font-bold">{{$subject}}</div>
        <hr class="w-full">
        <div class="py-2 bg-white text-lg text-sky-900">
            {{-- You have booked in for a schedule with {{env('APP_NAME') ?? 'PT.GROUP'}} at {{$data['address']}} for <a href="{{$data['url'] ?? '#'}}" class=" text-blue-500 font-bold">{{$data['name']}}</a> --}}
            {{ $text_content }}
            <hr>
            <a href={{$confirmation_url}} class="rounded py-3 px-6 text-white bg-slate-950 border border-white font-bold">Confirm</a>
        </div>
    </body>
</html>
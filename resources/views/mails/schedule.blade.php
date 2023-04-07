<x-head/>
<body class="py-3 bg-sky-300 font-semibold font-sans">
    <div class="py-2 bg-white text-sky-600 text-center text-xl">{{$data['title']}}</div>
    <div class="py-2 bg-white text-lg text-sky-900">
        You have been booked in for a schedule with {{config('app.name') ?? 'BP.TRUST'}} at {{$data['address']}} for <a href="{{$data['url'] ?? '#'}}" class=" text-blue-500 font-bold">{{$data['name']}}</a>
        <hr>
        Set to <br>{{date('l D-m-Y', strtotime($data['due_date']))}}
    </div>
</body>
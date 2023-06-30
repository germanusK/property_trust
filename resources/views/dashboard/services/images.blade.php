@extends('dashboard.main')
@section('content')
    <form method="POST" enctype="multipart/form-data">
        <div class="py-4 sm:grid md:grid lg:grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 w-full border-b border-slate-200 border-opacity-20">
            @foreach ($images as $image)
                <div class="w-24 h-24 relative">
                    <img class="w-full h-full rounded ring ring-white ring-opacity-30" scr="{{ $image->url }}">
                    <input type="checkbox" value="{{ $image->url }}" name="urls[]" class="h-8 w-8 block mx-auto absolute bottom-full bg-white rounded-sm text-slate-900 z-20">
                </div>
            @endforeach
        </div>
        <div class="my-2 py-3">
            <div class="w-3/5 mx-auto">
                <div class="text-center py-1 text-slate-300 font-semibold text-lg">Add More Images</div>
                <input class="mx-3 my-2 px-2 border rounded h-9 w-full" type="file" multiple name="images">
            </div>
            <div class="w-3/5 mx-auto flex px-3 justify-end">
                <button class=" rounded-sm ring ring-teal-100 ring-opacity-30 bg-white bg-opacity-80 text-white text-opacity-20" type="submit">update</button>
            </div>
        </div>
    </form>
@endsection
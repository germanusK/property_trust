@extends('dashboard.main')
@section('content')
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="py-4 sm:grid md:grid lg:grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 w-full border-b border-slate-200 border-opacity-20">
            @foreach ($images as $image)
                <div class="w-76 h-76 relative m-1">
                    <input type="checkbox" value="{{ $image->url }}" name="urls[]" class="h-9 w-9 border absolute bottom-0 bg-white rounded m-4 text-slate-900">
                    <img class="w-full h-full object-cover object-center ring ring-white ring-opacity-30" src="{{ $image->url }}">
                </div>
            @endforeach
        </div>
        <div class="my-2 py-3">
            <div class="w-3/5 mx-auto">
                <div class="text-center py-1 text-slate-300 font-semibold text-lg">Add More Images</div>
                <input class="mx-3 my-2 px-2 border rounded h-9 w-full" type="file" accept="image/*" multiple="multiple" name="files[]">
            </div>
            <div class="w-3/5 mx-auto flex px-3 justify-end">
                <button class=" rounded-sm ring ring-teal-100 ring-opacity-30 bg-white bg-opacity-80 text-white text-opacity-20" type="submit">update</button>
            </div>
        </div>
    </form>
@endsection
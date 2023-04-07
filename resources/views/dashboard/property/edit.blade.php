@extends('dashboard.main')
@section('content')
<div class="block w-full">
    <div class=" w-full flex whitespace-nowrap overflow-x-scroll no-scrollbar py-2 bg-black bg-opacity-10">
        @foreach($data['images'] as $key=>$value)
            <figure class="  mx-2 flex-wrap border-x border-black border-opacity-40 px-1 items-end justify-end">
                <img src="{{$value}}" alt="" class="h-28 rounded block">
                <button title="drop" class="block border-b border-white border-opacity-30 rounded px-2 py-1"><span class="text-slate-200 text-lg fas fa-trash"></span></button>
            </figure>
        @endforeach
        <button title="add image" class="block border-b border-white border-opacity-30 rounded px-2 py-1 mx-4"><span class="text-slate-200 text-lg fas fa-plus"></span></button>
    </div>

    <div class="w-full py-4">
        <form action="{{url('/rest/property/update/'.$data['id'])}}" method="post" enctype="multipart/form-data" class="w-5/6 max-w-md px-6 py-12 mx-auto rounded-xl border-black border-x border-opacity-40 bg-stone-900 bg-opacity-20">
            @foreach($data as $key=>$value)
                @if('images' != $key && 'id' != $key && 'created_at' != $key && 'updated_at' != $key )
                    <div class="py-1 flex flex-wrap w-11/12 mx-auto">
                        <label for="{{$key}}" class="sm:block w-full  capitalize text-sm text-slate-200 italic sm:w-20">{{$key}}:</label>
                        @if('description'==$key)<textarea name="{{$key}}" id="" class="py-1 pl-2 rounded focus:rounded no-scrollbar flex-auto w-full bg-white bg-opacity-20">{{$value}}</textarea>
                        @elseif('group'==$key) <select name="{{$key}}" id="" class="py-1 pl-2 rounded focus:rounded flex-auto w-full bg-white bg-opacity-20">
                            <option value="{{$value}}" selected class="bg-white bg-opacity-20">{{$value}}</option>
                            @foreach(['GC', 'RE', 'ARCH', 'CONS'] as $index=>$val)
                                @if($value != $val)
                                    <option value="{{$val}}" class="bg-white bg-opacity-20">{{$val}}</option>
                                @endif
                            @endforeach
                        </select>
                        @else
                            <input type="text" name="{{$key}}" id="" value="{{$value}}" class="py-1 pl-2 rounded focus:rounded flex-auto w-full bg-white bg-opacity-20">
                        @endif
                    </div>
                @endif
            @endforeach
            <div class="items-end justify-between flex py-6 gap-4">
                <a type="button" href="{{url('/rest/property')}}" class="px-3 py-2 border-b border-white text-white rounded font-semibold"><span class="fas fa-arrow-left"></span></a>
                <button type="submit" class="px-3 py-2 border-b border-white text-white rounded font-semibold">update</button>
            </div>
        </form>
    </div>
</div>
@endsection
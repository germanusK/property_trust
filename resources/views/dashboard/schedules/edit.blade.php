@extends('dashboard.main')
@section('content')
    <div class="w-11/12 mx-auto border border-blue-200 rounded bg-slate-950 py-8 my-4 px-3">
        <div class="md:grid lg:grid xl:grid grid-cols-2 text-sky-200 text-opacity-70">
            <div class="px-3 ">
                {{-- property info --}}
                <div class="w-4/5 mx-auto py-1 font-semibold text-lg text-center"><img class="w-full h-auto rounded ring ring-white ring-opacity-25 drop-shadow" src="{{ $schedule->property->images->first() ?? asset('asset_images/_1676749992_601878.jpeg') }}"></div>
                <div >
                    <span class="block py-1 font-semibold text-lg text-center">{{ $schedule->property->name }}</span>
                    <span class="block py-1 text-base text-center">{{ $schedule->property->address }}</span>
                    <span class="block py-1 text-base text-center">{{ $schedule->property->description }}</span>
                </div>
                <hr class="w-1/3 mx-auto border border-slate-500 border-opacity-70 my-2">
                <div >
                    <span class="block py-1 font-semibold text-lg text-center">{{ $schedule->customer->name }}</span>
                    <span class="block py-1 text-base text-center">{{ $schedule->customer->email }}</span>
                    <span class="block py-1 text-base text-center">{{ $schedule->customer->contact }}</span>
                </div>
            </div>
            <div class="px-4 bg-white bg-opacity-10 rounded shadow py-2 flex flex-col justify-center">
                <div class="w-full">
                    @if(now()->isAfter(\Illuminate\Support\Carbon::parse($schedule->due_date)))
                        <div class="py-4 my-2 text-center text-orange-300 text-opacity-80">Expired since {{ \Illuminate\Support\Carbon::parse($schedule->due_date)->format('d-m-Y H:i') }}</div>
                    @endif
                    <form method="POST" enc_type="multipart/form_data">
                        @csrf
                        <div class="my-4">
                            <label class="font-extralight italic text-sm text-slate-400">Status:</label>
                            <select class="h-9 rounded-sm ring w-full bg-white bg-opacity-70 text-slate-800 px-2" name="status" required>
                                <option></option>
                                <option value="pending" {{ $schedule->status == 'pending' ? 'selected' :'' }}>PENDING</option>
                                <option value="achieved" {{ $schedule->status == 'achieved' ? 'selected' :'' }}>ACHIEVED</option>
                            </select>
                        </div>
                        <div class="my-4">
                            <label class="font-extralight italic text-sm text-slate-400">Due date:</label>
                            <input class="h-9 rounded-sm ring w-full bg-white bg-opacity-70 text-slate-800 px-2" name="due_date" value="{{ $schedule->due_date }}" type="datetime-local" required>
                        </div>
                        <div class="my-4">
                            <input class="rounded w-2/3 text-center mx-auto bg-white bg-opacity-10 text-slate-200 py-1 px-2" value="update" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
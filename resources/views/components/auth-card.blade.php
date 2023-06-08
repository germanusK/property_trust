<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-slate-900">
    <div class="bg-slate-900">
        {{ $logo }}
    </div>

    <div class="w-full bg-white py-4">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 mx-auto bg-white overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</div>

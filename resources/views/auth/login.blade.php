@extends('layouts.guest')
@section('content')
<div class=" h-screen flex justify-end relative" style="background-image: url('{{asset('img/home2.jpg')}}'); background-size:cover; background-repeat:no-repeat; background-position:center; background-blend-mode: multiply;">
    
    <div class=" sm:w-3/5 md:w-1/3 lg:w-1/3 flex flex-col justify-center border-x-2 border-white bg-stone-900 shadow-2xl py-4 px-6">
    
        <a class="mb-6 mx-auto" href="{{ url('/') }}" title="Home"><img style="width: 5rem; height: 3rem; border-radius: 50%;" class="border-2 border-white" src="{{ asset('img/logo1.jpg') }}"></span></a>
        <div class=" mb-4 text-xl md:text-3xl  font-semibold text-white border-b text-center py-2">
            PROPERTY TRUST GROUP
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="">
            @csrf
        
            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />
        
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
        
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
        
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
        
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-white text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            
            <div class="flex justify-center py-2">
                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        
            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-300 hover:text-red-300 float-right" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
        
                {{-- <a href="{{ url('/register') }}" class="block text-center text-sm italic text-blue-500 py-2">create an account</a> --}}
            </div>
        </form>
    </div>

</div>

    
@endsection

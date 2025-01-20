@extends('showcase.layout')
@section('section')
    <div class="container-fluid py-4">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="card my-5">
                <div class="card-header"><h5 class="text-center text-dark text-capitalize">{{$title}}</h5></div>
                <form method="POST" action="{{ route('new_profile') }}" class="card-body">
                    @csrf
            
                    <!-- Name -->
                    <div class="mb-3">
                        <i class="text-info text-capitalize">email</i>
                        <input type="email" name="email" class="form-control rounded" required autofocus value="{{old('email')}}">
                        @error('email')
                            <small class="text-danger text-lowercase">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <i class="text-info text-capitalize">password</i>
                        <input type="password" name="password" class="form-control rounded" required value="{{old('password')}}">
                        @error('password')
                            <small class="text-danger text-lowercase">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <i class="text-info text-capitalize">confirm password</i>
                        <input type="password" name="confirm_password" class="form-control rounded" required value="{{old('confirm_password')}}">
                        @error('confirm_password')
                            <small class="text-danger text-lowercase">{{$message}}</small>
                        @enderror
                    </div>
            
                    
                    <div class="text-center mt-4">
                        <a class="text-success" href="{{ route('login') }}">
                            <em>{{ __('Already have a profile account?') }}</em>
                        </a>
                        <hr>
                        <button type="submit" class="btn btn-dark rounded btn-md text-capitalize">create</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

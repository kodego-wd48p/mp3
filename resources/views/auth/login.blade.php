@extends('layouts.app')

@section('content')

                           

    <section class="gradient-form h-full bg-neutral-200 dark:bg-neutral-700">
        <div class="container h-full p-10">
            <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
                <div class="w-full">
                    <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                        <div class="g-0 lg:flex lg:flex-wrap">
                            <!-- Left column container-->
                            <div class="px-4 md:px-0 lg:w-6/12">
                                <div class="md:mx-6 md:p-12">
                                    <!-- Logo -->
                                    <div class="text-center">
                                        <img src="{{ asset('/images/triologo.png') }}" class="card-img-top" alt="image of the company" style="width: 70px; height: auto;">
                                        <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold">
                                            T'OutSourcing.
                                        </h4>
                                        <p>Please login to your account</p>
                                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            {{-- CSRF - CROSS SITE REQUEST FORGERY --}}

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('email') }}" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif

                                    <!--Register button-->
                                        <div class="flex items-center justify-between pb-6">
                                        {{-- <p class="mb-0 mr-2">Don't have an account?</p> --}}

                                        @if (Route::has('register'))
                                        <div class="dropdown">
                                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                Need an account? REGISTER HERE
                                            </a>
                                        
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('Register for Applicant') }}</a></li>
                                            <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('Register for Recuiter') }}</a></li>
                                            </ul>
                                        </div>


                                        {{-- <button type="submit" class="btn btn-primary">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Need an account? Register') }}</a>
                                        </li> --}}
                                    @endif

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
                        <!-- Right column container with background and description-->
                        <div
                        class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none"
                        style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593)">
                        <div class="px-4 py-6 text-white md:mx-6 md:p-12">
                        <h4 class="mb-6 text-xl font-semibold">
                            We are more than just a company
                        </h4>
                        <p class="text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat.
                        </p>
                        </div>

                        </div>
                        </div>






@endsection

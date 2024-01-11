@extends('layouts.app')

@section('content')
<link href="{{ asset('css/custom-login.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto" style="width: 50%; padding-top:5%;">
            <div class="card ">
                <div class="card-header text-center text-muted">
                    <h1>{{ __('Login') }}</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 ps-5">
                            <label for="email" class=" text-dark">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ps-5">
                            <label for="password" class="text-dark">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ps-5">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2 offset-md-2">
                            <div class="">
                                <button type="submit" class="btn btn-warning text-muted">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link text-dark" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
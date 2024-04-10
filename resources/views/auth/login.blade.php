@extends('layouts.auth')

@section('content')
    <div class="login_card border border-2">
        <div class="p-5">
            <img src="{{ asset('storage/logo_landscape.png') }}" style="width: 120px;" class="mb-3">
            <p class="h2 text-primary fw-bold mb-0 text-uppercase">
                Login <span class=" fw-semibold text-dark">To Your Account</span>
            </p>
            <p class="fs-6 text-secondary mb-5">
                Enter your credential to log into your account.
            </p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="mb-1">{{ __('Email Address') }}</label>

                    <div style="width: 400px;">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="mb-1">{{ __('Password') }}</label>
                    <div class="">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-5">
                    <div class="" form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="">
                        <button type="submit" class="btn lg_btn btn-primary w-100">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

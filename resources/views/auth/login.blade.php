@extends('layouts.guest')

@section('content')
<div id="login" class="animate form">
    <form method="POST" action="{{ route('login') }}">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h1>Sign in</h1> 
        @csrf

        <p>
            <label for="phone">{{ __('Phone Number') }}</label>
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus placeholder="07xxxxxxxx">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p>

        <p>
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Orh#!134">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p>

        <P class="keeplogin">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">
                {{ __('Keep me logged in') }}
            </label>
        </P>

        <p class="login button">
            <input type="submit" value="Login"  name="login"/>
        </p>

        <p class="change_link">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </p>
        <p>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </p>
        <p class="change_link">
            Not a member yet ?
            <a href="{{ route('register') }}" class="to_register">Join us</a>
        </p>
    </form>
</div>               
@endsection

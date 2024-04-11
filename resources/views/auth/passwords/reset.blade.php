@extends('layouts.guest')

@section('content')
<div id="login" class="animate form">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
    
        <input type="hidden" name="token" value="{{ $token }}">
    
        <p>
            <label for="email">{{ __('Email Address') }}</label>
    
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p>
    
        <p>
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p>
    
        <p>
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </p>
    
        <p>
            <button type="submit" class="btn btn-primary">
                {{ __('Reset Password') }}
            </button>
        </p>
    </form>
</div>
@endsection

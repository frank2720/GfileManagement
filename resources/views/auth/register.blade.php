@extends('layouts.guest')

@section('content')
<div id="login" class="animate form">
    <form method="POST" action="{{ route('register') }}">
        @csrf
    
        <p>
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p>
    
        <p>
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="xyz@gmail.com">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p>
    
        <p>
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="OGD4$@!eh">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p>
    
        <p>
            <label for="password-confirm">{{ __('Confirm Password') }}</label>            
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="OGD4$@!eh">
        </p>

        <p class="signin button"> 
            <input type="submit" value="Sign up"/> 
        </p>

        <p class="change_link">  
            Already a member ?
            <a href="{{route('login')}}" class="to_register"> Go and log in </a>
        </p>
    </form>
</div>
@endsection

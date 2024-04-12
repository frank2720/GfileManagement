@extends('layouts.guest')

@section('content')
<div id="login" class="animate form">
    <form method="POST" action="{{ route('register') }}">
        @csrf
    
        <p>
            <label for="name">{{ __('Full name') }}</label><span class="text-danger"> *</span>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Enter your name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p>
    
        <p>
            <label for="phone">{{ __('Phone number') }}</label><span class="text-danger"> *</span>
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus placeholder="07xxxxxxxx">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p>

        <p>
            <label for="birthday">{{ __('Birthday') }}</label><span class="text-danger"> *</span>
            <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" autofocus>
            @error('birthday')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p>

        <p>
            <label for="gender">{{ __('Gender') }}</label><span class="text-danger"> *</span>
            <select name="gender" id="gender" class="form-control" required>
                <option value="" disabled selected>Slect Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p>

        <p>
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="xyz@gmail.com">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p>
    
        <p>
            <label for="password">{{ __('Password') }}</label><span class="text-danger"> *</span>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="OGD4$@!eh">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p>
    
        <p>
            <label for="password-confirm">{{ __('Confirm Password') }}</label> <span class="text-danger"> *</span>           
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="OGD4$@!eh">
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

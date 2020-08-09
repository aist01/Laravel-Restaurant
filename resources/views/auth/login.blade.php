@extends('login.log')

@section('thing') 
{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="main.scss">

<!------ Include the above in your HEAD tag ---------->
        
    </head>
    <body>
<div class="sidenav">
         <div class="login-main-text bottom">
            <h2>Restaurants<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div> --}}
{{-- <div class="main">
    
        <div class="col-md-6 col-sm-12 top">
            <div class="login-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                        <div class="form-group fuxia">
                            <label for="email">E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-check left">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label left" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            {{-- <div class="col-md-6 father" style="width: 100%;"> --}}
                                {{-- <button type="submit" class="btn btn-black leave">
                                    {{ __('Login') }}
                                </button>
                                <button type="submit" class="btn btn-black push">
                                    <a href="{{ route('register') }}">Register</a>
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            {{-- </div> --}}
                        {{-- </div>
                    </form>
                </div>
            </div>
        </div>
   
</div> --}} 
{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 --}} 

        <div class="main">
            <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-black">{{ __('Login') }}</button>
                        <button type="submit" class="btn btn-secondary">
                            <a href="{{ route('register') }}" class="grey">Register</a>
                        </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                </form>
            </div>
        </div>
@endsection


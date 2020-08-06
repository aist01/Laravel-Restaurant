<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- <title>Restaurants</title> --}}
        <title>{{ config('app.name', 'Restaurants') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="main.scss">

<!------ Include the above in your HEAD tag ---------->
        
</head>
    <body>
        {{-- <div class="sidenav child">
            <div class="login-main-text bottom">
                <h2><a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Restaurants') }}
                </a>
                    <br> Login Page
                </h2>
                <p>Login or register from here to access.</p>
            </div>
        </div>
            @yield('thing')
    </body>
</html> --}}
<div class="sidenav">
         {{-- <div class="login-main-text">
            <h2><a class="navbar-brand grey" href="{{ url('/') }}">
                    {{ config('app.name', 'Restaurants') }}
                </a>
                    <br> Login Page
                </h2>
                <p>Login or register from here to access.</p>
         </div>
      </div> --}}
    <img class="drink" src="images/drinks.jpg">  
        @yield('thing')
    </body>
</html>
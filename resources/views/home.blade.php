{{-- @extends('layouts.app') --}}

{{-- @section('content')
<div class="container pic">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header green">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Restaurants') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 106px;
                color: black;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                color: white;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .restaurant {
                display: inline-block;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .links a {
                font-size: 26px;
            }

            .register {
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
            }

            .title {
                color: #fff;
            }

            .bold {
                font-weight: bold;
                font-size: 106px;
            }

            .lady {
                display: inline-block;
                width: 100%;
                height: 100%;
                background-image: url('https://www.booooooom.com/wp-content/uploads/2019/01/mailka-favre-0.jpg');
                background-size: cover;
                background-position: center;
                margin-bottom: 0px;
            }

            .logged-in {
                margin-top: 40px;
                margin-left: 540px;
                font-size: 34px;
                color: white;

            }

            
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-md shadow-sm color">
            <div class="container white">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Restaurants') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"       aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest


                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> 
                                Menus
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('menu.index') }}">
                                    Menus List
                                </a>
                                <a class="dropdown-item" href="{{ route('menu.create') }}">
                                    New Menu
                                </a>   
                            </div>  
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Restaurants
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('restaurant.index') }}">
                                    Restaurants List
                                </a>
                                <a class="dropdown-item" href="{{ route('restaurant.create') }}">
                                    New Restaurant
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark lady">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">
                    @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </h1>
            <div>

            </div>
        </div>
        
           
        </div>
       
   </body>
</html>

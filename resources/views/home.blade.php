{{-- @extends('layouts.app')

@section('content')
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

        <title>Laravel</title>

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
                background-position: center;
                background-size: cover;
            }

            
        </style>
    </head>
    <body>

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark lady">
    {{-- <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div> --}}
        </div>
   </body>
</html>

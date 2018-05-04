<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'C-Collection') }}</title>

        <title>Laravel</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <div>
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ route('home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @endauth
                    </div>
                @endif

                <div class="content">
                    <div class="title m-b-md">
                        {{-- Welcome  --}}
                        <div class="container">
                           <img class="img-fluid" src="img/C-collogo.png" alt="logo"> 
                        </div>
                        
                    </div>

                    <div class="links">
                        <a href="{{ route('chatapp') }}">ChatApp</a>
                        <a href="">placeholder</a>
                        {{-- <a href="">placeholder</a>
                        <a href="">placeholder</a>
                        <a href="">placeholder</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

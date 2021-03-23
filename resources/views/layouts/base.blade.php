<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <title>{{ isset($title) ? $title.' | '.config('app.name') : config('app.name') }}</title>
        <style>
            .divider{
                width: 125px;
                height: 2px;
                background: #ccc;
                margin: 0 auto;
            }
            body{
                background-image: linear-gradient(to right, rgb(204,204,230), rgb(140,140,200));
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand navbar-dark bg-danger">
              <a class="navbar-brand" href="{{ route('login') }}">
                  Cars House
              </a>
              
                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-white">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-white">Se Connecter</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-white">S'enrégistrer</a>
                                @endif
                            @endauth
                        </div>
                     @endif
                </ul>
              
        </nav>
        
        @yield('content')

        <footer class="bg-dark text-white mt-5 pt-3">
            <div class="d-flex justify-content-around">
                <p>Travaux Pratique en Laravel | Atelier de Génie Logiciel</p>
                <p>&copy; Copyright 2021 &middot;</p>
                <p>Réalisé par : <br> Josué  AGBOTON & Gautier DJOSSOU</p>
            </div>
        </footer>
    </body>
</html>

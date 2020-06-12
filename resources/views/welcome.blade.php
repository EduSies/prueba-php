<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prueba PHP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{ __('home.home') }}</a>
                    @else
                        <a href="{{ route('login',['lang' => APP::getLocale()]) }}">{{ __('home.login') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register',['lang' => APP::getLocale()]) }}">{{ __('home.register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content links">
                <a href="{{ route('home') }}">
                    <div class="title m-b-md">{{ __('home.title_home') }}</div>
                </a>
                <div class="links">
                    <a href="{{ route('home',['lang' => 'es']) }}">{{ __('home.lang_es') }}</a>
                    <a href="{{ route('home',['lang' => 'ca']) }}">{{ __('home.lang_ca') }}</a>
                    <a href="{{ route('home',['lang' => 'en']) }}">{{ __('home.lang_eng') }}</a>
                </div>
            </div>
        </div>
    </body>
</html>

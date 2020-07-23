<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
           
                <div class="top-right links">
                    
                </div>
            

            <div class="content">
                <img class="navbar-brand-minimized" src="https://aix.com.br/wp-content/uploads/2018/08/logo-aix-sistemas-horizontal-1-300x104.png" width="30"
                    style="width: 450px" height="150" alt="Aix Logo">
                @if (Route::has('login'))
                    <div class="links">
                        @auth
                            <a class="btn btn-default" href="{{ url('/home') }}" style="font-weigth: bold"><b>Home</b></a>
                        @else
                            <a class="btn btn-default" href="{{ route('login') }}" style="font-weigth: bold"><b>Entrar</b></a>

                            @if (Route::has('register'))
                                <a class="btn btn-default" href="{{ route('register') }}" style="font-weigth: bold"><b>Cadastre-se</b></a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>

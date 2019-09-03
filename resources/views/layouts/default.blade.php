<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{ asset('vendor_assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="/css/set1.css">
</head>

<body>
    {{--<div class="menu">
    <div>
        <img class="menu__logo" src="/img/Enter_Work.svg" alt="">
    </div>
    <div>
        <ul class="list-inline">
            <li class="list-inline-item">Beneficios y Planes</li>
            <li class="list-inline-item">Salas de Juntas</li>
            <li class="list-inline-item">Ubicación</li>
            <li class="list-inline-item"><a href="" class="btn btn-warning"> ¡Contáctanos! </a></li>
        </ul>
    </div>
</div>--}}

    <div class="header">
        <nav id="header" class="navbar navbar-expand-md navbar-dark bg-transparent ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="menu__logo" src="/img/Enter_Work.svg" alt="">
                </a>
                <?php

                $text_dark = 'text-white';
                if (request()->segment(1) != '') {
                    $text_dark = (request()->segment(1) != 'sala-de-juntas') ? 'text-body' : 'text-white';
                }
                if (request()->segment(1) == 'contactanos' || request()->segment(1) == 'gracias') {
                    $text_dark = 'text-white';
                }
                $text_hamburger = 'text-warning';
                if (request()->segment(1) != '') {
                    $text_hamburger = (request()->segment(1) != 'sala-de-juntas') ? 'text-body' : 'text-warning';
                }


                ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    {{--<span class="navbar-toggler-icon"></span>--}}
                    <i class="fas fa-bars {{ $text_hamburger }}"></i>
                </button>

                <div class="collapse navbar-collapse collapse-movil" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <div class="text-right d-block d-md-none mt-5">
                        <a class="navbar-toggler text-body" data-toggle="collapse" data-target="#navbarSupportedContent"><i class="fas fa-times"></i></a>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ $text_dark }} text-li-movil" href="/beneficios-y-planes"> Beneficios y Planes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $text_dark }} text-li-movil" href="/sala-de-juntas">Salas de Juntas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $text_dark }} text-li-movil " href="/ubicacion">Ubicación</a>
                        </li>

                        <li class="nav-item">
                            <a href="/contactanos" class="btn btn-warning ml-md-3"> ¡Contáctanos! </a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </div>


    @yield('content')

    <div class="footer mt-5">
        <div class="footer__left">
            <img class="footer__img" src="/img/Enter_Work_Line.svg" alt="">
            <span class="text-warning ml-2 small">© 2019</span>
        </div>
        <div>
            <ul class="list-inline footer__ul">
                <li class="list-inline-item">Aviso de privacidad </li>
                <li class="list-inline-item">
                    Contáctanos: hola@enterwork.mx
                </li>
                <li class="list-inline-item d-block d-md-inline">
                    Síguenos:
                    <a href="https://www.facebook.com/EnterWorkMX" target="_blank">
                        <img class=" ml-2  footer__social" src="/img/IG_Blanco.svg" alt="">
                    </a>
                    <a href="https://www.facebook.com/EnterWorkMX" target="_blank">
                        <img class=" ml-2 footer__social" src="/img/FB_Blanco.svg" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEJvgKxLAney-YcEgn-RC1GNBMOb0F0Ek&callback=initMap" async defer> </script>
    <script src="/js/app.js"></script>

</body>

</html>

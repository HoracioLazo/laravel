<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>PARROQUIA DE LA SALUD</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/li-scroller.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ico/favicon.ico') }}" />
    <!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <div class="container">
        {{-- aqui esta el header --}}
        <header id="header">
            @include('layouts.navbaras.navs.header')
        </header>
        {{-- aqui esta la navegacion menu --}}
        <section id="navArea">
            @include('layouts.navbaras.navs.navegacion')
        </section>
        {{-- seccion apostoles --}}
        <section id="newsSection">
            @include('layouts.navbaras.apostoles')
        </section>

        <section id="sliderSection">
            <div class="row">
                @include('pages.carrusel')
                @include('pages.aside')
            </div>
        </section>
        {{-- aqui ira el contendio principal el cual esta en la vista contenido--}}
        <section id="contentSection">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    @include('pages.contenido')
                </div>


                {{-- seccion de slider con sponsor categoria y video --}}
                <div class="col-lg-4 col-md-4 col-sm-4">
                    @include('layouts.navbaras.sidebar')
                </div>
            </div>
        </section>




        {{-- aqui esta el footers --}}
        <div>
            @include('layouts.footers.footers')
        </div>
        <script src="{{asset ('assets/js/jquery.min.js') }}"></script>
        <script src="{{asset ('assets/js/wow.min.js') }}"></script>
        <script src="{{asset ('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{asset ('assets/js/slick.min.js') }}"></script>
        <script src="{{asset ('assets/js/jquery.li-scroller.1.0.js') }}"></script>
        <script src="{{asset ('assets/js/jquery.newsTicker.min.js') }}"></script>
        <script src="{{asset ('assets/js/jquery.fancybox.pack.js') }}"></script>
        <script src="{{asset ('assets/js/custom.js') }}"></script>
</body>

</html>

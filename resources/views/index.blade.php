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
        <header id="header">
            {{-- aqui esta el header --}}

    @include('layouts.navbaras.navs.header')
    </header>
    <section id="navArea">
        {{-- aqui esta la navegacion menu --}}

        @include('layouts.navbaras.navs.navegacion')
    </section>
    <section id="newsSection">
        {{-- seccion apostoles --}}

        @include('layouts.navbaras.apostoles')

    </section>

    <section id="sliderSection">
        <div class="row">
            {{-- esto es el carrusel superior --}}
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="slick_slider">
                    <div class="single_iteam"> <a href="pages/single_page.html"> <img src="assets/images/belen.png"
                                alt=""></a>
                        <div class="slider_article">
                            <h2><a class="slider_tittle" href="pages/single_page.html">Que pome aqui</a></h2>
                            <p>Hola, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl
                                quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                        </div>
                    </div>
                    <div class="single_iteam"> <a href="pages/single_page.html"> <img src="assets/images/oviyuli.jpg"
                                alt=""></a>
                        <div class="slider_article">
                            <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor
                                    felis sit amet</a></h2>
                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                        </div>
                    </div>
                    <div class="single_iteam"> <a href="pages/single_page.html"> <img src="assets/images/añoviejo.jpg"
                                alt=""></a>
                        <div class="slider_article">
                            <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor
                                    felis sit amet</a></h2>
                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                        </div>
                    </div>
                    <div class="single_iteam"> <a href="pages/single_page.html"> <img
                                src="assets/images/artegrafica.jpg" alt=""></a>
                        <div class="slider_article">
                            <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor
                                    felis sit amet</a></h2>
                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- aqui termina carrusel superior --}}


            {{-- Aqui empieza el slaide derecha --}}
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="latest_post">
                    <h2><span>PUBLICACIÓN</span></h2>
                    <div class="latest_post_container">
                        <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                        <ul class="latest_postnav">
                            <li>
                                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt=""
                                            src="images/post_img1.jpg"> </a>
                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                            A 1</a> </div>
                                </div>
                            </li>
                            <li>
                                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt=""
                                            src="images/post_img1.jpg"> </a>
                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                            A 2</a> </div>
                                </div>
                            </li>
                            <li>
                                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt=""
                                            src="images/post_img1.jpg"> </a>
                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                            A 3</a> </div>
                                </div>
                            </li>
                            <li>
                                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt=""
                                            src="images/post_img1.jpg"> </a>
                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                            A4</a> </div>
                                </div>
                            </li>
                            <li>
                                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt=""
                                            src="images/post_img1.jpg"> </a>
                                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                            A5</a> </div>
                                </div>
                            </li>
                        </ul>
                        <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contentSection">
        <div class="row">
             {{-- esto es parte del contenido --}}
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="left_content">
                    <div class="single_post_content">
                        <h2><span>Los Titulares</span></h2>
                        <div class="single_post_content_left">
                            <ul class="business_catgnav  wow fadeInDown">
                                <li>
                                    <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img">
                                            <img alt="" src="images/featured_img1.jpg"> <span class="overlay"></span>
                                        </a>
                                        <figcaption> <a href="pages/single_page.html">Titular de la noticia semanal</a> </figcaption>
                                        <p>Se comienza la temporada de verano las playas estan listas...</p>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                        <div class="single_post_content_right">
                            <ul class="spost_nav">
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                            class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                A 1</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                            class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Aliquam malesuada diam eget turpis varius 2</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                            class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Aliquam malesuada diam eget turpis varius 3</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                            class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                        <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                                                Aliquam malesuada diam eget turpis varius 4</a> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="fashion_technology_area">
                        <div class="fashion">
                            <div class="single_post_content">
                                <h2><span>Cultura</span></h2>
                                <ul class="business_catgnav wow fadeInDown">
                                    <li>
                                        <figure class="bsbig_fig"> <a href="pages/single_page.html"
                                                class="featured_img"> <img alt="" src="images/featured_img2.jpg"> <span
                                                    class="overlay"></span> </a>
                                            <figcaption> <a href="pages/single_page.html">La actividad cultural mas importante</a> </figcaption>
                                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus,
                                                egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                        </figure>
                                    </li>
                                </ul>
                                <ul class="spost_nav">
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="technology">
                            <div class="single_post_content">
                                <h2><span>Educación</span></h2>
                                <ul class="business_catgnav">
                                    <li>
                                        <figure class="bsbig_fig wow fadeInDown"> <a href="pages/single_page.html"
                                                class="featured_img"> <img alt="" src="images/featured_img3.jpg"> <span
                                                    class="overlay"></span> </a>
                                            <figcaption> <a href="pages/single_page.html">Sacando punta al Lápiz</a> </figcaption>
                                            <p>Escribir con ganas todos tenemos una historia, pues cuenta la tuya...</p>
                                        </figure>
                                    </li>
                                </ul>
                                <ul class="spost_nav">
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html"
                                                class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html"
                                                    class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- aqui llega el contenido --}}
            <div class="col-lg-4 col-md-4 col-sm-4">
                @include('layouts.navbaras.sidebar')
            </div>
        </div>
    </section>
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

<!DOCTYPE html>
<html>
<head>
<title>NewsFeed | Pages | Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    @include('layouts.navbaras.navs.header')
  </header>
  <section id="navArea">
    @include('layouts.navbaras.navs.navegacion')
  </section>
  <section id="newsSection">
    @include('layouts.navbaras.apostoles')
  </section>
  <div class="container">
    @yield('content')
  </div>

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

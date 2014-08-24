<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <title>@yield('title', 'Ensuites On Tow')</title>
    <meta name="keywords" content="ensuites, portable toilet, luxury portable bathroom, portable bathroom"/>
    <meta name="description" content="@yield('title', 'Ensuites On Tow')">
    <meta name="author" content="Chris Duell - VentureCraft">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
          rel="stylesheet" type="text/css') }}">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.theme.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('vendor/isotope/jquery.isotope.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('vendor/mediaelement/mediaelementplayer.css') }}" media="screen">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-shop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-animate.css') }}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/settings.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('vendor/circle-flip-slideshow/css/component.css') }}" media="screen">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-responsive.css') }}"/>

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/skins/default.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('vendor/modernizr.js') }}"></script>

    <!--[if IE]>
    <link rel="stylesheet" href="{{ asset('assets/css/ie.css') }}">
    <![endif]-->

    <!--[if lte IE 8]>
    <script src="{{ asset('vendor/respond.js') }}"></script>
    <![endif]-->

</head>
<body class="{{ body_classes() }}">

<div class="body">
    <header id="header" class="single-menu flat-menu">
        <div class="container">
            <h1 class="logo">
                <a href="{{ route('site.index') }}"><img alt="Porto" width="68" height="54" data-sticky-width="50"
                                          data-sticky-height="40" src="{{ asset('assets/img/logo/header.png') }}"></a>
            </h1>
            <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="icon icon-bars"></i>
            </button>
        </div>
        @include('templates.partials.nav')
    </header>

    <div role="main" class="main">

        @yield('header-bar')

        <div class="container text-center">
            {{ Notification::showAll() }}
        </div>

        @yield('content')

    </div>

    @include('templates.partials.footer')

</div>

<!-- Libs -->
<script src="{{ asset('vendor/jquery.js') }}"></script>
<script src="{{ asset('vendor/jquery.appear.js') }}"></script>
<script src="{{ asset('vendor/jquery.easing.js') }}"></script>
<script src="{{ asset('vendor/jquery.cookie.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/jquery.validate.js') }}"></script>
<script src="{{ asset('vendor/jquery.stellar.js') }}"></script>
<script src="{{ asset('vendor/jquery.knob.js') }}"></script>
<script src="{{ asset('vendor/jquery.gmap.js') }}"></script>
<script src="{{ asset('vendor/isotope/jquery.isotope.js') }}"></script>
<script src="{{ asset('vendor/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('vendor/jflickrfeed/jflickrfeed.js') }}"></script>
<script src="{{ asset('vendor/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('vendor/mediaelement/mediaelement-and-player.js') }}"></script>

<!-- Theme Initializer -->
<script src="{{ asset('assets/js/theme.plugins.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>

<!-- Current Page JS -->
<script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.revolution.js') }}"></script>
<script src="{{ asset('vendor/circle-flip-slideshow/js/jquery.flipshow.js') }}"></script>
<script src="{{ asset('assets/js/views/view.home.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

@include('templates.partials.google-analytics')

</body>
</html>

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
          rel="stylesheet" type="text/css">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css" media="screen">
    <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css" media="screen">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" media="screen">
    <link rel="stylesheet" href="vendor/isotope/jquery.isotope.css" media="screen">
    <link rel="stylesheet" href="vendor/mediaelement/mediaelementplayer.css" media="screen">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/theme-elements.css">
    <link rel="stylesheet" href="assets/css/theme-blog.css">
    <link rel="stylesheet" href="assets/css/theme-shop.css">
    <link rel="stylesheet" href="assets/css/theme-animate.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css" media="screen">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/theme-responsive.css"/>

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/css/skins/default.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr.js"></script>

    <!--[if IE]>
    <link rel="stylesheet" href="assets/css/ie.css">
    <![endif]-->

    <!--[if lte IE 8]>
    <script src="vendor/respond.js"></script>
    <![endif]-->

</head>
<body class="{{ body_classes() }}">

<div class="body">
    <header id="header" class="single-menu flat-menu">
        <div class="container">
            <h1 class="logo">
                <a href="index.html"><img alt="Porto" width="68" height="54" data-sticky-width="50"
                                          data-sticky-height="40" src="assets/img/logo/header.png"></a>
            </h1>
            <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="icon icon-bars"></i>
            </button>
        </div>
        @include('templates.partials.nav')
    </header>

    <div role="main" class="main">

        @yield('header-bar')
        @yield('content')

    </div>

    @include('templates.partials.footer')

</div>

<!-- Libs -->
<script src="vendor/jquery.js"></script>
<script src="vendor/jquery.appear.js"></script>
<script src="vendor/jquery.easing.js"></script>
<script src="vendor/jquery.cookie.js"></script>
<script src="vendor/bootstrap/js/bootstrap.js"></script>
<script src="vendor/jquery.validate.js"></script>
<script src="vendor/jquery.stellar.js"></script>
<script src="vendor/jquery.knob.js"></script>
<script src="vendor/jquery.gmap.js"></script>
<script src="vendor/twitterjs/twitter.js"></script>
<script src="vendor/isotope/jquery.isotope.js"></script>
<script src="vendor/owl-carousel/owl.carousel.js"></script>
<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="vendor/magnific-popup/magnific-popup.js"></script>
<script src="vendor/mediaelement/mediaelement-and-player.js"></script>

<!-- Theme Initializer -->
<script src="assets/js/theme.plugins.js"></script>
<script src="assets/js/theme.js"></script>

<!-- Current Page JS -->
<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.js"></script>
<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
<script src="assets/js/views/view.home.js"></script>

<!-- Custom JS -->
<script src="assets/js/custom.js"></script>

@include('templates.partials.google-analytics')

</body>
</html>

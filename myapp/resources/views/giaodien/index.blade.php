<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<!-- Mirrored from htmltemplate.akatheme.com/retation/style-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2025 08:06:10 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Retation HTML</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Thêm CSS -->
    <link rel="stylesheet" href="{{ asset('css/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets/css/flickity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets/css/hover.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets/css/nivo-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets/css/color/default.css') }}">

    <link rel="icon" type="image/x-icon" href="https://htmltemplate.akatheme.com/retation/images/favicon.ico">
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!--
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "1e9facb6-9190-4d1f-aa7d-4db4b2f293c5", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
-->

</head>

<body class="loadpage home style-v1">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div id="wrap">


        @include('giaodien.header')  {{-- Gọi header --}}

        <div id="main-content" class="main-content">
            @yield('main')
        </div>

        @include('giaodien.footer')  {{-- Gọi footer --}}

    </div>

    <!-- Thêm JS -->
    <script src="{{ asset('js/assets/js/vendor/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('js/assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/assets/js/vendor/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/assets/js/vendor/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/assets/js/vendor/jquery.nivo.slider.pack.js') }}"></script>

    <!-- <script src="https://maps.googleapis.com/maps/api/js"></script> -->

    <script src="{{ asset('js/assets/js/vendor/main.js') }}"></script>


</body>

<!-- Mirrored from htmltemplate.akatheme.com/retation/style-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2025 08:06:21 GMT -->

</html>

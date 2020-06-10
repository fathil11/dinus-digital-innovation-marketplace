<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- Meta -->
    @include('section.meta')

    <!-- favicon -->
    @include('section.favicon')

    <title>DDIM Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app/custom.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css') }}">
    {{-- <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js"> --}}
</head>

<body class="theme-light" data-background="none" data-highlight="blue2">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">
        @include('section.app.menu-bottom')
        @yield('content')
    </div>

    <script type="text/javascript" src="{{ asset('js/app/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app/custom.js') }}"></script>
</body>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    @include('section.meta')

    <!-- favicon -->
    @include('section.favicon')

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Magnific -->
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons -->
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.7/css/unicons.css">

    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />

    <!-- Main Css -->
    <link href="{{ asset('css/landing/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('css/landing/colors/default.css') }}" rel="stylesheet" id="color-opt">
    <link href="{{ asset('css/landing/custom.css') }}" rel="stylesheet">


    <title>@yield('title')</title>
</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a class="logo" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo-dark.png') }}" height="24" alt="">
                </a>
            </div>
            <div class="buy-button d-none d-md-inline">
                <a href="https://hmtiudinus.org" target="_blank" class="btn btn-primary">Login</a>
            </div>
            <!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu active">
                        <a href="#home">Home</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#platform">Platform</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#category">Category</a>
                    </li>

                </ul>
                <!--end login button-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->

    @yield('content')

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-footer">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="#" class="logo-footer">
                        <img src="{{ asset('images/logo-light.png') }}" height="24" alt="">
                    </a>
                    <p class="mt-4">Start connecting your digital innovation with the world.</p>
                    <ul class="list-unstyled social-icon social mb-0 mt-4">
                        <li class="list-inline-item"><a href="https://dinus.ac.id" target="_blank" class="rounded"><i
                                    data-feather="globe" class="fea icon-sm fea-social"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/udinus_smg/" target="_blank"
                                class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                    </ul>
                    <!--end icon-->
                </div>
                <!--end col-->

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-left">
                        <p class="mb-0">© 2020 <a href="https://hmtiudinus.org" target="_blank" class="text-reset">HMTI
                                Project Labs</a>.
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/scrollspy.min.js') }}"></script>
    <script src="{{ asset('js/small_menu.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/magnific.init.js') }}"></script>
    <!-- SLIDER -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/owl.init.js') }} "></script>
    <!-- Icons -->
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
    <!-- Main Js -->
    <script src="{{ asset('js/landing/app.js') }}"></script>
</body>

</html>

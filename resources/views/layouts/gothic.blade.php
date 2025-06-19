<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Gothic - Architecture Bootstrap 5 HTML Template')</title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Vendor CSS (Icon Font) -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/ionicons.min.css') }}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fancybox.min.css') }}" />

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    
    <!-- Custom Gradient CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom-gradient.css') }}" />

    @stack('styles')
</head>

<body>
    <!-- Header Section Start -->
    <div class="header header-transparent-bg section-fluid">

        <!-- Header Wrapper Start -->
        <div class="header-wrapper">
            <div class="header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-lg-2 col-md-3 col-6">
                            <!-- Header Logo Start -->
                            <div class="header-logo">
                                <a href="{{ route('home') }}">
                                    <img class="fit-image" src="{{ asset('assets/images/logo/logo-white.png') }}" alt="Header Logo">
                                </a>
                            </div>
                            <!-- Header Logo End -->

                        </div>

                        <div class="col-lg-8 col-md-7 d-none d-md-block">

                            <!-- Main Menu Language Wrapper Start -->
                            <div class="main-menu-language-wrapper">

                                <!-- Main Menu Start -->
                                <nav class="main-menu main-menu-white">
                                    <ul>
                                        <li>
                                            <a class="@yield('home_active')" href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Works</a>
                                            <ul class="submenu">
                                                <li><a href="#">Project</a></li>
                                                <li><a href="#">Project Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">News</a>
                                            <ul class="submenu">
                                                <li><a href="#">Blog</a></li>
                                                <li><a href="#">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">About</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- Main Menu End -->

                                <!-- Language Start -->
                                <div class="language language-white d-md-none d-lg-flex">
                                    <a href="#">Eng</a>
                                    <a href="#"> <span>Fra</span></a>
                                </div>
                                <!-- Language End -->

                            </div>
                            <!-- Main Menu Language Wrapper End -->

                        </div>

                        <div class="col-lg-2 col-md-2 col-6">

                            <!-- Mobile Menu Hamburger Start -->
                            <div class="mobile-menu-hamburger mobile-menu-hamburger-white">
                                <a href="javascript:void(0)">
                                    <span>Menu</span>
                                    <i class="icon ion-android-menu"></i>
                                </a>
                            </div>
                            <!-- Mobile Menu Hamburger End -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Mobile Menu Inner Start -->
            <div class="mobile-menu-inner">
                <!-- Mobile Menu Inner Top Start -->
                <div class="mobile-menu-inner-top">

                    <!-- Mobile Menu Logo Start  -->
                    <div class="logo-mobile">
                        <img src="{{ asset('assets/images/logo/logo-black.png') }}" alt="Logo">
                    </div>
                    <!-- Mobile Menu Logo End -->

                    <!-- Button Close Start -->
                    <div class="offcanvas-btn-close">
                        <i class="icofont-close-line"></i>
                    </div>
                    <!-- Button Close End -->

                </div>
                <!-- Mobile Menu Inner Top End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li class="has-children">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="has-children">
                                <a href="#">Works <i class="icofont-rounded-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="#">Project</a></li>
                                    <li><a href="#">Project Details</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">News <i class="icofont-rounded-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->
            </div>
            <!-- Mobile Menu Inner End -->
        </div>
        <!-- Mobile Menu End -->

    </div>
    <!-- Header Section End -->

    @yield('content')

    <!-- Main Footer -->
    <footer class="section section-padding-top bg-light overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/logo-black.png') }}" alt="Logo Black" /></a>
                    </div>
                    <!-- Footer Logo End -->

                    <!-- Footer Nav Start -->
                    <ul class="footer-nav mb-n3">
                        <li class="mb-3"><a href="{{ route('home') }}">Home</a></li>
                        <li class="mb-3"><a href="#">Works</a></li>
                        <li class="mb-3"><a href="#">News</a></li>
                        <li class="mb-3"><a href="#">About</a></li>
                        <li class="mb-3"><a href="#">Contact</a></li>
                    </ul>
                    <!-- Footer Nav End -->

                    <!-- Contact Info Start -->
                    <div class="contact-info">AB Road XX, AB Floor, New York, AA 123456 <br> <a href="tel:+012-345-6789-00">(+012) 345-6789-00</a> <br> <a href="mailto:hello@consulte.co">hello@consulte.co</a></div>
                    <!-- Contact Info End -->

                    <!-- Footer Social Icons Start -->
                    <ul class="footer-social-icons social-media-link justify-content-center">
                        <li><a href="#" class="icofont-facebook"></a></li>
                        <li><a href="#" class="icofont-twitter"></a></li>
                        <li><a href="#" class="icofont-google-plus"></a></li>
                        <li><a href="#" class="icofont-linkedin"></a></li>
                        <li><a href="#" class="icofont-rss"></a></li>
                        <li><a href="#" class="icofont-dribbble"></a></li>
                    </ul>
                    <!-- Footer Social Icons End -->

                    <!-- Copyright Start -->
                    <div class="copyright">© 2021 <span>GOTHIC</span> Made with <i class="icofont-heart-alt text-danger" aria-hidden="true"></i> by <a href="https://hasthemes.com/">HasThemes</a></div>
                    <!-- Copyright End -->
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top icofont-circled-up"></i>
        <i class="arrow-bottom icofont-circled-up"></i>
    </a>
    <!-- Scroll Top End -->

    <!-- Scripts -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins/aos.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.fancybox.min.js') }}"></script>

    <!--Main JS-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>

</html> 
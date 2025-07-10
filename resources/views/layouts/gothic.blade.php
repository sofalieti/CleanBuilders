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
    
    <!-- CleanBuilders Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />

    @stack('styles')
    
    <!-- Custom responsive styles -->
    <style>
        /* Mobile menu button visibility */
        @media (min-width: 1200px) {
            .mobile-menu-hamburger {
                display: none !important;
            }
        }
        
        /* Main menu visibility */
        @media (max-width: 1199px) {
            .main-menu-language-wrapper {
                display: none !important;
            }
        }
        
        /* Hero buttons responsive adjustments */
        @media (min-width: 992px) {
            .btn-primary-custom.d-lg-none {
                display: none !important;
            }
        }
        
        /* Logo responsive adjustments - убираем фиксированную высоту для корректного отображения */
        .header-logo img {
            max-width: 180px;
            height: auto;
            width: auto;
            object-fit: contain;
        }
        
        .logo-mobile img {
            max-width: 150px;
            height: auto;
            width: auto;
            object-fit: contain;
        }
        
        .footer-logo img {
            max-width: 200px;
            height: auto;
            object-fit: contain;
        }
        
        @media (max-width: 768px) {
            .header-logo img {
                max-width: 140px;
                height: auto;
            }
            
            .logo-mobile img {
                max-width: 120px;
                height: auto;
            }
        }
        
        @media (max-width: 576px) {
            .header-logo img {
                max-width: 120px;
                height: auto;
            }
        }
    </style>
</head>

<body class="@stack('body_class')">
    <!-- Header Section Start -->
    <div class="header header-transparent-bg section-fluid">

        <!-- Header Wrapper Start -->
        <div class="header-wrapper">
            <div class="header-sticky">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-2 col-md-3 col-6">
                            <!-- Header Logo Start -->
                            <div class="header-logo">
                                <a href="{{ route('home') }}">
                                    <img class="fit-image" src="{{ asset('assets/images/CleanBuildersWhite.svg') }}" alt="CleanBuilders Logo">
                                </a>
                            </div>
                            <!-- Header Logo End -->

                        </div>

                        <div class="col-lg-7 col-xl-7 d-none d-xl-block">

                            <!-- Main Menu Language Wrapper Start -->
                            <div class="main-menu-language-wrapper">

                                <!-- Main Menu Start -->
                                <nav class="main-menu main-menu-white">
                                    <ul>
                                        <li>
                                            <a class="@yield('home_active')" href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li>
                                            <a class="@yield('roofing_active')" href="{{ route('roofing') }}">Roofing</a>
                                        </li>
                                        <li>
                                            <a href="#">Sidings</a>
                                        </li>
                                        <li>
                                            <a href="#">Decks</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('projects.index') }}">Projects</a>
                                        </li>
                                        <li>
                                            <a href="#">Contacts</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- Main Menu End -->



                            </div>
                            <!-- Main Menu Language Wrapper End -->

                        </div>

                        <div class="col-lg-3 col-xl-3 d-none d-xl-block">
                            <!-- Header Phone Section Start -->
                            <div class="header-phone-section">
                                <div class="header-phone-content">
                                    <div class="phone-icon">
                                        <i class="icofont-phone"></i>
                                    </div>
                                    <div class="phone-info">
                                        <span class="phone-label">Call Us Now</span>
                                        <a href="tel:855-355-0515" class="phone-number">855-355-0515</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Header Phone Section End -->
                        </div>

                        <div class="col-lg-2 col-md-2 col-6">

                            <!-- Mobile Menu Hamburger Start -->
                            <div class="mobile-menu-hamburger mobile-menu-hamburger-white d-xl-none">
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
                        <img src="{{ asset('assets/images/CleanBuildersDark.svg') }}" alt="CleanBuilders Logo">
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
                            <li>
                                <a class="@yield('home_active')" href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a class="@yield('roofing_active')" href="{{ route('roofing') }}">Roofing</a>
                            </li>
                            <li>
                                <a href="#">Sidings</a>
                            </li>
                            <li>
                                <a href="#">Decks</a>
                            </li>
                            <li>
                                <a href="{{ route('projects.index') }}">Projects</a>
                            </li>
                            <li>
                                <a href="#">Contacts</a>
                            </li>
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
    <footer class="section section-padding-top footer-dark overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/CleanBuildersWhite.svg') }}" alt="CleanBuilders Logo" /></a>
                    </div>
                    <!-- Footer Logo End -->

                    <!-- Footer Nav Start -->
                    <ul class="footer-nav mb-n3">
                        <li class="mb-3"><a href="{{ route('home') }}">Home</a></li>
                        <li class="mb-3"><a href="{{ route('roofing') }}">Roofing</a></li>
                        <li class="mb-3"><a href="#">Sidings</a></li>
                        <li class="mb-3"><a href="#">Decks</a></li>
                        <li class="mb-3"><a href="#">Projects</a></li>
                        <li class="mb-3"><a href="#">Contacts</a></li>
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
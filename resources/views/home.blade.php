@extends('layouts.gothic')

@section('title', 'Gothic - Architecture Bootstrap 5 HTML Template')

@section('home_active', 'active')

@section('content')
    <!-- Hero Section Start -->
    <div class="section position-relative overflow-hidden">

        <!-- Hero Slider Start -->
        <div class="hero-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <!-- Hero Slider Item Start -->
                    <div class="hero-slide-item swiper-slide">

                        <!-- Hero Slider Bg Image Start -->
                        <div class="hero-slide-bg">
                            <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" alt="Slider Image" />
                        </div>
                        <!-- Hero Slider Bg image End -->

                        <!-- Hero Slider Content Start -->
                        <div class="container">
                            <div class="hero-content-wrapper">
                                <div class="hero-text-content">
                                    <div class="hero-slide-content">
                                        <h4 class="subtitle">Bay Area Professionals</h4>
                                        <h2 class="title">
                                            Trusted <span class="services-highlight">Roofing, Sidings &</span> <br />
                                            <span class="services-highlight">Decks</span> Professionals in Bay Area
                                        </h2>
                                        <p>Looking for reliable professionals you can trust with your home? We deliver exceptional craftsmanship and reliable service you can count on for your most important investment.</p>
                                        <div class="hero-buttons">
                                            <a href="#" class="btn-custom btn-primary-custom">View Our Works</a>
                                            <a href="#" class="btn-custom btn-secondary-custom">Get A Free Consult</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-form-content">
                                    <div class="hero-contact-form">
                                        <h3>Get Free Consultation</h3>
                                        <form action="#" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Full Name *</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="phone">Phone Number *</label>
                                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email Address</label>
                                                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="service">Service Needed</label>
                                                <select id="service" name="service" class="form-control">
                                                    <option value="">Select a service</option>
                                                    <option value="roofing">Roofing</option>
                                                    <option value="siding">Siding</option>
                                                    <option value="deck">Deck Installation</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Your Message</label>
                                                <textarea id="message" name="message" class="form-control" placeholder="Tell us about your project..." rows="4"></textarea>
                                            </div>
                                            <button type="submit" class="btn-form-submit">Send Request</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hero Slider Content End -->

                    </div>
                    <!-- Hero Slider Item End -->

                    <!-- Hero Slider Item Start -->
                    <div class="hero-slide-item swiper-slide">

                        <!-- Hero Slider Bg Image Start -->
                        <div class="hero-slide-bg">
                            <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" alt="Slider Image" />
                        </div>
                        <!-- Hero Slider Bg Image End -->

                        <!-- Hero Slider Content Start -->
                        <div class="container">
                            <div class="hero-content-wrapper">
                                <div class="hero-text-content">
                                    <div class="hero-slide-content">
                                        <h4 class="subtitle">Bay Area Professionals</h4>
                                        <h2 class="title">
                                            Trusted <span class="services-highlight">Roofing, Sidings &</span> <br />
                                            <span class="services-highlight">Decks</span> Professionals in Bay Area
                                        </h2>
                                        <p>Looking for reliable professionals you can trust with your home? We deliver exceptional craftsmanship and reliable service you can count on for your most important investment.</p>
                                        <div class="hero-buttons">
                                            <a href="#" class="btn-custom btn-primary-custom">View Our Works</a>
                                            <a href="#" class="btn-custom btn-secondary-custom">Get A Free Consult</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-form-content">
                                    <div class="hero-contact-form">
                                        <h3>Get Free Consultation</h3>
                                        <form action="#" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name2">Full Name *</label>
                                                <input type="text" id="name2" name="name" class="form-control" placeholder="Enter your full name" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="phone2">Phone Number *</label>
                                                    <input type="tel" id="phone2" name="phone" class="form-control" placeholder="Enter your phone number" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email2">Email Address</label>
                                                    <input type="email" id="email2" name="email" class="form-control" placeholder="Enter your email address">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="service2">Service Needed</label>
                                                <select id="service2" name="service" class="form-control">
                                                    <option value="">Select a service</option>
                                                    <option value="roofing">Roofing</option>
                                                    <option value="siding">Siding</option>
                                                    <option value="deck">Deck Installation</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="message2">Your Message</label>
                                                <textarea id="message2" name="message" class="form-control" placeholder="Tell us about your project..." rows="4"></textarea>
                                            </div>
                                            <button type="submit" class="btn-form-submit">Send Request</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hero Slider Content End -->

                    </div>
                    <!-- Hero Slider Item End -->

                </div>

                <!-- Swiper Pagination Start -->
                <div class="swiper-pagination d-md-none"></div>
                <!-- Swiper Pagination End -->

                <!-- Swiper Navigation Start -->
                <div class="home-slider-prev swiper-button-prev d-md-flex d-none"><i class="ion-ios-arrow-thin-left"></i></div>
                <div class="home-slider-next swiper-button-next d-md-flex d-none"><i class="ion-ios-arrow-thin-right"></i></div>
                <!-- Swiper Navigation End -->

            </div>
        </div>
        <!-- Hero Slider End -->

        <!-- Hero Slider Social Start -->
        <div class="hero-slider-social">

            <!-- Social Media Link Start -->
            <div class="social-media-link social-link-white">
                <a href="#"><i class="icofont-twitter"></i></a>
                <a href="#"><i class="icofont-facebook"></i></a>
                <a href="#"><i class="icofont-behance"></i></a>
            </div>
            <!-- Social Media Link End -->

        </div>
        <!-- Hero Slider Social End -->

    </div>
    <!-- Hero Section End -->

    <!-- History Section Start -->
    <div class="section section-padding-top overflow-hidden">
        <div class="container">
            <div class="row mb-n10">
                <div class="col-lg-6 mb-10 col-md-12 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="500">
                    <div class="history-image">
                        <img class="fit-image" src="{{ asset('assets/images/history/history-1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mb-10 col-md-12 align-self-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="500">
                    <div class="history-wrapper">
                        <h1 class="title">Gothic Studio</h1>
                        <div class="history-content">
                            <h4 class="subtitle">Founded in Lebanon in 1967, Archo Architecture Company (KCC) has grown to become one of the Middle East's leading construction contractors.</h4>
                            <p>We specialise in complex and prestigious construction and infrastructure projects. Our portfolio includes some of the region's most iconic landmarks, from super high-rise luxury developments, to five star hotels, hospitals and intricately sophisticated smart buildings. </p>
                            <p>We have compiled an extensive list of other area clinics and health resources, so that when someone calls.</p>
                        </div>
                        <div class="signature">
                            <img src="{{ asset('assets/images/icon/sign.png') }}" alt="Sign">
                            <h4 class="title">Daniel JR</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- History Section End -->

    <!-- Services Section Start -->
    <div class="section section-padding-top bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Start -->
                    <div class="section-title" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title">Why Choose Us</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-12">
                    <div class="service-inner-container">

                        <!-- Service Block Start -->
                        <div class="service-block" data-aos="fade-up" data-aos-delay="300">
                            <div class="inner-box">
                                <h5 class="title">
                                    <a href="#">Professional Roofing</a>
                                </h5>
                                <p>Complete roofing solutions including repairs, replacements, and new installations. We work with all materials and provide lifetime warranties.</p>
                                <div class="icon-link-bottom">
                                    <i class="icon icofont-building-alt"></i>
                                    <a href="#" class="more">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Service Block End -->

                        <!-- Service Block Start -->
                        <div class="service-block" data-aos="fade-up" data-aos-delay="400">
                            <div class="inner-box">
                                <h5 class="title">
                                    <a href="#">Quality Siding</a>
                                </h5>
                                <p>Transform your home's exterior with premium siding installation. Vinyl, wood, fiber cement - we handle all types with expert precision.</p>
                                <div class="icon-link-bottom">
                                    <i class="icon icofont-home"></i>
                                    <a href="#" class="more">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Service Block End -->

                        <!-- Service Block Start -->
                        <div class="service-block" data-aos="fade-up" data-aos-delay="500">
                            <div class="inner-box">
                                <h5 class="title">
                                    <a href="#">Custom Decks</a>
                                </h5>
                                <p>Beautiful outdoor living spaces with custom deck design and installation. From composite to hardwood, we create your perfect retreat.</p>
                                <div class="icon-link-bottom">
                                    <i class="icon icofont-architecture-alt"></i>
                                    <a href="#" class="more">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Service Block End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Funfact Section Start -->
    <div class="section section-padding-bottom bg-light">
        <div class="container">
            <div class="funfact-inner-container">
                <div class="row mb-n8">
                    <div class="col-sm-4 col-6 mb-8" data-aos="fade-up" data-aos-delay="300">
                        <!-- Single Funfact Start -->
                        <div class="single-funfact">
                            <span class="odometer" data-count-to="8000"></span>
                            <h6 class="title">Partner <br> worldwide</h6>
                        </div>
                        <!-- Single Funfact End -->
                    </div>
                    <div class="col-sm-4 col-6 mb-8" data-aos="fade-up" data-aos-delay="400">
                        <!-- Single Funfact Start -->
                        <div class="single-funfact">
                            <span class="odometer" data-count-to="1250"></span>
                            <h4 class="title">employees and <br> staffs</h4>
                        </div>
                        <!-- Single Funfact End -->
                    </div>
                    <div class="col-sm-4 col-6 mb-8" data-aos="fade-up" data-aos-delay="500">
                        <!-- Single Funfact Start -->
                        <div class="single-funfact">
                            <span class="odometer" data-count-to="904"></span>
                            <h5 class="title">project completed <br> on 60 countries</h5>
                        </div>
                        <!-- Single Funfact End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Funfact Section End -->

    <!-- Project Tab Section Start -->
    <div class="section bg-light">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="300">

                <!-- Section Title Start -->
                <div class="col-xl-3 col-md-12">
                    <div class="section-title mb-0">
                        <h2 class="title">latest Works</h2>
                    </div>
                </div>
                <!-- Section Title End -->

                <!-- Tab Start -->
                <div class="col-xl-7 col-md-8 col-sm-12">

                    <!-- Section Title & Product Tab Start -->
                    <div class="section-tabs-header">

                        <!-- Tabs Header Start -->
                        <ul class="tabs-header-nav nav">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-item-all">All</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-item-architecture">Architecture</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-item-all">Interior</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-item-architecture">Landscape</a></li>
                        </ul>
                        <!-- Tabs Header End -->

                    </div>
                    <!-- Section Title & Product Tab End -->
                </div>
                <!-- Tab End -->

                <!-- All Project Button Start -->
                <div class="col-xl-2 col-md-4 col-sm-12">
                    <div class="all-project-btn">
                        <a href="#">See All Projects <i class="arrow icofont-rounded-right"></i></a>
                    </div>
                </div>
                <!-- All Project Button End -->

            </div>
        </div>
        <div class="container-auto">
            <!-- Tab Content Start -->
            <div class="tab-content" data-aos="fade-up" data-aos-delay="400">
                <div class="tab-pane fade show active" id="tab-item-all">
                    <div class="tab-pane-carousel position-relative">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <!-- Single Project Slide Start -->
                                    <div class="single-project-slide">

                                        <!-- Thumb Start -->
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img class="fit-image" src="{{ asset('assets/images/gallery/1-1.jpg') }}" alt="Product" />
                                            </a>
                                        </div>
                                        <!-- Thumb End -->

                                        <!-- Content Start -->
                                        <div class="content">
                                            <h4 class="subtitle">Residential</h4>
                                            <h3 class="title"><a href="#">Cubic Villa</a></h3>
                                        </div>
                                        <!-- Content End -->

                                    </div>
                                    <!-- Single Project Slide End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Single Project Slide Start -->
                                    <div class="single-project-slide">

                                        <!-- Thumb Start -->
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img class="fit-image" src="{{ asset('assets/images/gallery/1-2.jpg') }}" alt="Product" />
                                            </a>
                                        </div>
                                        <!-- Thumb End -->

                                        <!-- Content Start -->
                                        <div class="content">
                                            <h4 class="subtitle">Architecture</h4>
                                            <h3 class="title"><a href="#">Culture House</a></h3>
                                        </div>
                                        <!-- Content End -->

                                    </div>
                                    <!-- Single Project Slide End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Single Project Slide Start -->
                                    <div class="single-project-slide">

                                        <!-- Thumb Start -->
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img class="fit-image" src="{{ asset('assets/images/gallery/1-3.jpg') }}" alt="Product" />
                                            </a>
                                        </div>
                                        <!-- Thumb End -->

                                        <!-- Content Start -->
                                        <div class="content">
                                            <h4 class="subtitle">Commercial</h4>
                                            <h3 class="title"><a href="#">ABC Financial Bank</a></h3>
                                        </div>
                                        <!-- Content End -->

                                    </div>
                                    <!-- Single Project Slide End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Single Project Slide Start -->
                                    <div class="single-project-slide">

                                        <!-- Thumb Start -->
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img class="fit-image" src="{{ asset('assets/images/gallery/1-4.jpg') }}" alt="Product" />
                                            </a>
                                        </div>
                                        <!-- Thumb End -->

                                        <!-- Content Start -->
                                        <div class="content">
                                            <h4 class="subtitle">Interior</h4>
                                            <h3 class="title"><a href="#">B6-No.5 OLA Tower</a></h3>
                                        </div>
                                        <!-- Content End -->

                                    </div>
                                    <!-- Single Project Slide End -->
                                </div>

                            </div>

                            <!-- Swiper Pagination Start -->
                            <div class="swiper-pagination d-none"></div>
                            <!-- Swiper Pagination End -->

                            <!-- Swiper Navigation Start -->
                            <div class="tab-carousel-prev swiper-button-prev"><i class="icofont-thin-left"></i></div>
                            <div class="tab-carousel-next swiper-button-next"><i class="icofont-thin-right"></i></div>
                            <!-- Swiper Navigation End -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-item-architecture">
                    <div class="tab-pane-carousel-two position-relative">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <!-- Single Project Slide Start -->
                                    <div class="single-project-slide">

                                        <!-- Thumb Start -->
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img class="fit-image" src="{{ asset('assets/images/gallery/2-1.jpg') }}" alt="Product" />
                                            </a>
                                        </div>
                                        <!-- Thumb End -->

                                        <!-- Content Start -->
                                        <div class="content">
                                            <h4 class="subtitle">Residential</h4>
                                            <h3 class="title"><a href="#">Cubic Villa</a></h3>
                                        </div>
                                        <!-- Content End -->

                                    </div>
                                    <!-- Single Project Slide End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Single Project Slide Start -->
                                    <div class="single-project-slide">

                                        <!-- Thumb Start -->
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img class="fit-image" src="{{ asset('assets/images/gallery/2-2.jpg') }}" alt="Product" />
                                            </a>
                                        </div>
                                        <!-- Thumb End -->

                                        <!-- Content Start -->
                                        <div class="content">
                                            <h4 class="subtitle">Architecture</h4>
                                            <h3 class="title"><a href="#">Culture House</a></h3>
                                        </div>
                                        <!-- Content End -->

                                    </div>
                                    <!-- Single Project Slide End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Single Project Slide Start -->
                                    <div class="single-project-slide">

                                        <!-- Thumb Start -->
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img class="fit-image" src="{{ asset('assets/images/gallery/2-3.jpg') }}" alt="Product" />
                                            </a>
                                        </div>
                                        <!-- Thumb End -->

                                        <!-- Content Start -->
                                        <div class="content">
                                            <h4 class="subtitle">Commercial</h4>
                                            <h3 class="title"><a href="#">ABC Financial Bank</a></h3>
                                        </div>
                                        <!-- Content End -->

                                    </div>
                                    <!-- Single Project Slide End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Single Project Slide Start -->
                                    <div class="single-project-slide">

                                        <!-- Thumb Start -->
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img class="fit-image" src="{{ asset('assets/images/gallery/2-4.jpg') }}" alt="Product" />
                                            </a>
                                        </div>
                                        <!-- Thumb End -->

                                        <!-- Content Start -->
                                        <div class="content">
                                            <h4 class="subtitle">Interior</h4>
                                            <h3 class="title"><a href="#">B6-No.5 OLA Tower</a></h3>
                                        </div>
                                        <!-- Content End -->

                                    </div>
                                    <!-- Single Project Slide End -->
                                </div>

                            </div>

                            <!-- Swiper Pagination Start -->
                            <div class="swiper-pagination d-none"></div>
                            <!-- Swiper Pagination End -->

                            <!-- Swiper Navigation Start -->
                            <div class="tab-carousel-prev swiper-button-prev"><i class="icofont-thin-left"></i></div>
                            <div class="tab-carousel-next swiper-button-next"><i class="icofont-thin-right"></i></div>
                            <!-- Swiper Navigation End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab Content End -->
        </div>
    </div>
    <!-- Project Tab Section End -->

    <!-- Client Section Start -->
    <div class="section section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="section-title client-title" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title">+2,500 clients love us</h2>
                    </div>
                    <div class="client-crousel" data-aos="fade-up" data-aos-delay="300">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <!-- Single Client Start -->
                                    <div class="single-client-wrapper">
                                        <!-- Client Thumb Icon Start -->
                                        <div class="client-thumb-icon">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/images/client/1.png') }}" alt="Client Image">
                                            </div>
                                            <div class="icon">
                                                <i class="icofont-quote-right"></i>
                                            </div>
                                        </div>
                                        <!-- Client Thumb Icon End -->

                                        <!-- Client Content Start -->
                                        <div class="client-content">
                                            <!-- Name Start -->
                                            <h6 class="name">
                                                <a href="#">Ryan Betthalyn</a> / <span> Director at Chobham Manor</span>
                                            </h6>
                                            <!-- Name End -->
                                            <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                                        </div>
                                        <!-- Client Content End -->
                                    </div>
                                    <!-- Single Client End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Single Client Start -->
                                    <div class="single-client-wrapper">
                                        <!-- Client Thumb Icon Start -->
                                        <div class="client-thumb-icon">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/images/client/2.png') }}" alt="Client Image">
                                            </div>
                                            <div class="icon">
                                                <i class="icofont-quote-right"></i>
                                            </div>
                                        </div>
                                        <!-- Client Thumb Icon End -->

                                        <!-- Client Content Start -->
                                        <div class="client-content">
                                            <!-- Name Start -->
                                            <h6 class="name">
                                                <a href="#">Bobs Hanely</a> / <span> Director at Spotify</span>
                                            </h6>
                                            <!-- Name End -->
                                            <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                                        </div>
                                        <!-- Client Content End -->
                                    </div>
                                    <!-- Single Client End -->
                                </div>

                            </div>

                        </div>

                        <!-- Swiper Pagination Start -->
                        <div class="swiper-pagination d-none"></div>
                        <!-- Swiper Pagination End -->

                        <!-- Swiper Navigation Start -->
                        <div class="client-crousel-prev swiper-button-prev"><i class="icofont-thin-left"></i></div>
                        <div class="client-crousel-next swiper-button-next"><i class="icofont-thin-right"></i></div>
                        <!-- Swiper Navigation End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Section End -->

    <!-- Brand Logo Start -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Brand Logo Wrapper Start -->
                    <div class="brand-logo-carousel" data-aos="fade-up" data-aos-delay="300">
                        <div class="swiper-container">
                            <div class="swiper-wrapper align-items-center">

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href="#"><img src="{{ asset('assets/images/brand-logo/1.png') }}" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href="#"><img src="{{ asset('assets/images/brand-logo/2.png') }}" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href=""><img src="{{ asset('assets/images/brand-logo/3.png') }}" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href="#"><img src="{{ asset('assets/images/brand-logo/4.png') }}" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href="#"><img src="{{ asset('assets/images/brand-logo/5.png') }}" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                            </div>
                        </div>
                    </div>
                    <!-- Brand Logo Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Logo End -->

    <!-- News Section -->
    <div class="section news-section">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <!-- News Block -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="news-block">
                        <div class="image">
                            <a href="#"><img class="fit-image" src="{{ asset('assets/images/news/1.jpg') }}" alt="News Image" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="info-list">
                                <li>Jan 28, 2021</li>
                                <li>news</li>
                            </ul>
                            <h4 class="title"><a href="#">The Way Of Building</a></h4>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="news-block">
                        <div class="image">
                            <a href="#"><img class="fit-image" src="{{ asset('assets/images/news/2.jpg') }}" alt="News Image" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="info-list">
                                <li>Mar 08, 2021</li>
                                <li>inspiration</li>
                            </ul>
                            <h4 class="title"><a href="#">The Arch In Modern Architecture, Art & Aesthetic More</a></h4>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="news-block">
                        <div class="image">
                            <a href="#"><img class="fit-image" src="{{ asset('assets/images/news/3.jpg') }}" alt="News Image" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="info-list">
                                <li>Apr 18, 2021</li>
                                <li>tips & tricks</li>
                            </ul>
                            <h4 class="title"><a href="#">Spiral Stair, New Interior Design Trends 2020</a></h4>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="700">
                    <div class="news-block border-right-0">
                        <div class="image">
                            <a href="#"><img class="fit-image" src="{{ asset('assets/images/news/4.jpg') }}" alt="News Image" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="info-list">
                                <li>Nov 24, 2021</li>
                                <li>others</li>
                            </ul>
                            <h4 class="title"><a href="#">Nordic Interior Style</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End News Section -->
@endsection  
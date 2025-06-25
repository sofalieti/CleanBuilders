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
                                        <p class="hero-description">Looking for reliable professionals you can trust with your home? We deliver exceptional craftsmanship and reliable service you can count on for your most important investment.</p>
                                        <div class="hero-buttons">
                                            <a href="#" class="btn-custom btn-primary-custom">Get a Free Consult</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-form-content d-none d-lg-block">
                                    <div class="hero-contact-form">
                                        <h3>Get A Free Consult</h3>
                                        <form action="#" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Full Name *" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone Number *" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea id="message" name="message" class="form-control" placeholder="Tell us about your project..." rows="4"></textarea>
                                            </div>
                                            <button type="submit" class="btn-form-submit">Get My Free Consult</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hero Slider Content End -->

                    </div>
                    <!-- Hero Slider Item End -->



                </div>



            </div>
        </div>
        <!-- Hero Slider End -->



    </div>
    <!-- Hero Section End -->

    <!-- How We Work Section Start -->
    <div class="section section-padding overflow-hidden how-we-work-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <h1 class="title">How We Work</h1>
                        <p class="subtitle text-muted" style="font-size: 16px; line-height: 1.5;">Simple and transparent process from consultation to project completion.</p>
                    </div>
                </div>
            </div>
            
            <!-- Work Process Steps Start -->
            <div class="work-process-container">
                <div class="row">
                    <!-- Step 1 -->
                    <div class="col-lg-3 col-md-12 mb-4">
                        <div class="process-step text-center">
                            <div class="process-icon">
                                <i class="icofont-calendar"></i>
                            </div>
                            <h5 class="process-title">Schedule an Appointment</h5>
                            <p class="process-description">Call <span class="phone-highlight">855-355-0515</span> to book your free consultation at a convenient time.</p>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="col-lg-3 col-md-12 mb-4">
                        <div class="process-step text-center">
                            <div class="process-icon">
                                <i class="icofont-calculator-alt-2"></i>
                            </div>
                            <h5 class="process-title">Receive a Quote</h5>
                            <p class="process-description">Our specialist visits, takes measurements, and provides your detailed quote within 2 days.</p>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="col-lg-3 col-md-12 mb-4">
                        <div class="process-step text-center">
                            <div class="process-icon">
                                <i class="icofont-paper"></i>
                            </div>
                            <h5 class="process-title">Sign a Contract</h5>
                            <p class="process-description">After contract approval, we review details and order your materials.</p>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="col-lg-3 col-md-12 mb-4">
                        <div class="process-step text-center">
                            <div class="process-icon">
                                <i class="icofont-hammer"></i>
                            </div>
                            <h5 class="process-title">Project Completion</h5>
                            <p class="process-description">Certified installers complete the work and ensure your complete satisfaction.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Work Process Steps End -->
            
            <div class="text-center mt-5">
                <a href="tel:855-355-0515" class="btn btn-schedule">
                    <i class="icofont-phone me-2"></i>
                    Schedule an Appointment
                </a>
            </div>
        </div>
    </div>
    <!-- How We Work Section End -->



    <!-- Services Section Start -->
    <div class="section section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Start -->
                    <div class="section-title text-center" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title">What We Work With</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row mb-n8">
                <!-- Roofing Service Start -->
                <div class="col-lg-4 col-md-6 mb-8" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="service-item text-center d-block text-decoration-none text-dark position-relative service-link">
                        <!-- Service Image Start -->
                        <div class="service-image mb-4">
                            <img src="{{ asset('assets/images/gallery/1-1.jpg') }}" alt="Roofing Services" class="img-fluid rounded" style="height: 250px; width: 100%; object-fit: cover;">
                        </div>
                        <!-- Service Image End -->
                        
                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h4 class="service-title mb-3">Roofing</h4>
                            <p class="service-description mb-4">Complete roofing solutions including repairs, replacements, and new installations.</p>
                            
                            <!-- Service Link Arrow Start -->
                            <div class="service-arrow">
                                <span class="arrow-text">Learn More</span>
                                <i class="icofont-long-arrow-right arrow-icon"></i>
                            </div>
                            <!-- Service Link Arrow End -->
                        </div>
                        <!-- Service Content End -->
                    </a>
                </div>
                <!-- Roofing Service End -->
                
                <!-- Siding Service Start -->
                <div class="col-lg-4 col-md-6 mb-8" data-aos="fade-up" data-aos-delay="400">
                    <a href="#" class="service-item text-center d-block text-decoration-none text-dark position-relative service-link">
                        <!-- Service Image Start -->
                        <div class="service-image mb-4">
                            <img src="{{ asset('assets/images/gallery/1-2.jpg') }}" alt="Siding Services" class="img-fluid rounded" style="height: 250px; width: 100%; object-fit: cover;">
                                </div>
                        <!-- Service Image End -->
                        
                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h4 class="service-title mb-3">Siding</h4>
                            <p class="service-description mb-4">Premium siding installation with vinyl, wood, fiber cement, and composite materials.</p>
                            
                            <!-- Service Link Arrow Start -->
                            <div class="service-arrow">
                                <span class="arrow-text">Learn More</span>
                                <i class="icofont-long-arrow-right arrow-icon"></i>
                            </div>
                            <!-- Service Link Arrow End -->
                        </div>
                        <!-- Service Content End -->
                    </a>
                </div>
                <!-- Siding Service End -->
                
                <!-- Decks Service Start -->
                <div class="col-lg-4 col-md-6 mb-8" data-aos="fade-up" data-aos-delay="500">
                    <a href="#" class="service-item text-center d-block text-decoration-none text-dark position-relative service-link">
                        <!-- Service Image Start -->
                        <div class="service-image mb-4">
                            <img src="{{ asset('assets/images/gallery/1-3.jpg') }}" alt="Deck Services" class="img-fluid rounded" style="height: 250px; width: 100%; object-fit: cover;">
                                </div>
                        <!-- Service Image End -->
                        
                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h4 class="service-title mb-3">Decks</h4>
                            <p class="service-description mb-4">Custom deck design and installation from composite to hardwood materials.</p>
                            
                            <!-- Service Link Arrow Start -->
                            <div class="service-arrow">
                                <span class="arrow-text">Learn More</span>
                                <i class="icofont-long-arrow-right arrow-icon"></i>
                            </div>
                            <!-- Service Link Arrow End -->
                        </div>
                        <!-- Service Content End -->
                    </a>
                </div>
                <!-- Decks Service End -->
            </div>
            
            <!-- Custom CSS for service links animation -->
            <style>
                .service-link {
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                    padding: 20px;
                    border-radius: 10px;
                    background: white;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                }
                
                .service-link:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
                    color: inherit !important;
                }
                
                .service-arrow {
                    color: var(--primary-color, #3a952a);
                    font-weight: 600;
                    transition: all 0.3s ease;
                }
                
                .service-link:hover .service-arrow {
                    color: var(--primary-hover, #2e7a22);
                }
                
                .arrow-icon {
                    margin-left: 8px;
                    transition: transform 0.3s ease;
                    font-size: 16px;
                }
                
                .service-link:hover .arrow-icon {
                    transform: translateX(5px);
                }
                
                .arrow-text {
                    font-size: 14px;
                }
            </style>
            
            <!-- View Our Works Button Start -->
            <div class="row">
                <div class="col-12">
                    <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="600">
                        <a href="#" class="btn btn-schedule">
                            View Our Works
                        </a>
                    </div>
                </div>
            </div>
            <!-- View Our Works Button End -->
        </div>
    </div>
    <!-- Services Section End -->





    <!-- Client Section Start -->
    <div class="section section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="section-title client-title text-center" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title">What Our Clients Say</h2>
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
                                                <a href="#">Sarah Martinez</a> / <span> Homeowner, San Jose</span>
                                            </h6>
                                            <!-- Name End -->
                                            <p>CleanBuilders replaced our entire roof after storm damage. Their team was professional, punctual, and the quality of work exceeded our expectations. The new GAF shingles look amazing and we feel secure knowing we have a 10-year warranty!</p>
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
                                                <a href="#">Michael Chen</a> / <span> Homeowner, Fremont</span>
                                            </h6>
                                            <!-- Name End -->
                                            <p>We hired CleanBuilders for new siding and a custom deck. From the free consultation to project completion, everything was handled professionally. The James Hardie siding transformed our home's appearance, and the deck is perfect for entertaining guests!</p>
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

    <!-- Map and Contact Form Section Start -->
    <div class="section position-relative p-0">
        <div class="map-form-container">
            <!-- Google Map Background Start -->
            <div class="map-background">
                <iframe 
                    src="https://www.google.com/maps/d/embed?mid=1EoaHIaT3f1J5Ha-VLTieQrTYfbI&ehbc=2E312F&z=10" 
                    width="100%" 
                    height="750" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <!-- Google Map Background End -->
            
            <!-- Contact Form Overlay Start -->
            <div class="form-overlay">
                <div class="container-fluid">
                    <div class="row h-100">
                        <div class="col-lg-8"></div>
                        <div class="col-lg-4 d-flex align-items-center justify-content-center">
                            <div class="hero-contact-form">
                                <h3>Get A Free Consult</h3>
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" id="map_name" name="name" class="form-control" placeholder="Full Name *" required>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <input type="tel" id="map_phone" name="phone" class="form-control" placeholder="Phone Number *" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="map_email" name="email" class="form-control" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="map_message" name="message" class="form-control" placeholder="Tell us about your project..." rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn-form-submit">Get My Free Consult</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Form Overlay End -->
        </div>
    </div>
    <!-- Map and Contact Form Section End -->


@endsection  
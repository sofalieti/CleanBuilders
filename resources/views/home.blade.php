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
                            <img src="{{ asset('assets/images/slider/CleanBuildersBackground.webp') }}" alt="Slider Image" />
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
                                            <a href="#" class="btn-custom btn-primary-custom d-lg-none">Get a Free Consult</a>
                                            <a href="#" class="btn-custom btn-video-custom" data-bs-toggle="modal" data-bs-target="#videoModal">
                                                <i class="icofont-ui-play me-2"></i>Watch Video
                                            </a>
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
                        <p class="subtitle text-muted" style="font-size: 16px; line-height: 1.5;">Simple and transparent process from consultation to project completion.<br>
                        We believe in clear communication and honest pricing throughout every step of your home transformation.<br>
                        Our experienced team handles all permits, inspections, and coordination so you can focus on enjoying the results.<br><br></p>
                    </div>
                </div>
            </div>
            
            <!-- Work Process Steps Start -->
            <div class="work-process-container">
                <div class="row">
                    <!-- Step 1 -->
                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                        <div class="process-step text-center">
                            <div class="process-icon">
                                <i class="icofont-calendar"></i>
                            </div>
                            <h5 class="process-title">Schedule an Appointment</h5>
                            <p class="process-description">Call <span class="phone-highlight">855-355-0515</span> to book your free consultation at a convenient time.</p>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                        <div class="process-step text-center">
                            <div class="process-icon">
                                <i class="icofont-calculator-alt-2"></i>
                            </div>
                            <h5 class="process-title">Receive a Quote</h5>
                            <p class="process-description">Our specialist visits, takes measurements, and provides your detailed quote within 2 days.</p>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                        <div class="process-step text-center">
                            <div class="process-icon">
                                <i class="icofont-paper"></i>
                            </div>
                            <h5 class="process-title">Sign a Contract</h5>
                            <p class="process-description">After contract approval, we review details and order your materials.</p>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
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
            
            <div class="text-center btn-section-spacing">
                <a href="tel:855-355-0515" class="btn btn-schedule">
                    <i class="icofont-phone me-2"></i>
                    Schedule an Appointment
                </a>
            </div>
        </div>
    </div>
    <!-- How We Work Section End -->

    <!-- Sticky CTA Bar Start -->
    <div class="sticky-cta-bar" id="stickyCTA">
        <button class="sticky-cta-close" id="stickyCTAClose" aria-label="Закрыть">
            <i class="icofont-close"></i>
        </button>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="cta-content">
                        <h4 class="cta-title mb-0">Ready to Transform Your Home?</h4>
                        <p class="cta-subtitle mb-0">Get your free consultation today - trusted by Bay Area homeowners</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 text-end">
                    <a href="tel:855-355-0515" class="btn btn-cta-primary me-2">
                        <i class="icofont-phone me-1"></i>
                        Call Now
                    </a>
                    <a href="#" class="btn btn-cta-secondary">
                        Free Quote
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Sticky CTA Bar End -->

    <!-- Why CleanBuilders Section Start -->
    <div class="section section-padding why-cleanbuilders-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Content -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
                    <div class="why-cleanbuilders-content">
                        <h2 class="why-title">Why CleanBuilders?</h2>
                        <h3 class="why-subtitle">Bay Area's Design Leader & Most Experienced Installers</h3>
                        <p class="why-description">
                            At CleanBuilders, we have become the local market leader among all Bay Area construction companies by combining exceptional design services, with the world's best roofing, siding, and deck materials and expert, certified installation. You will get an amazing home transformation and the peace of mind that comes with one of the industry's best warranties.
                        </p>
                        <div class="why-cta">
                            <a href="tel:855-355-0515" class="btn btn-schedule">
                                Free Consultation
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Images Content -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="400">
                    <div class="why-cleanbuilders-images">
                        <div class="images-grid">
                            <div class="image-item">
                                <img src="{{ asset('assets/images/photos/WhatsApp Image 2025-06-17 at 19.27.39_69a274e1.jpg') }}" alt="CleanBuilders Roofing Work" class="img-fluid rounded">
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('assets/images/photos/WhatsApp Image 2025-06-17 at 19.27.39_94205105.jpg') }}" alt="CleanBuilders Siding Work" class="img-fluid rounded">
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('assets/images/photos/IMG-20250620-WA0002.jpg') }}" alt="CleanBuilders Deck Work" class="img-fluid rounded">
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('assets/images/photos/IMG-20250620-WA0059.jpg') }}" alt="CleanBuilders Quality Work" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why CleanBuilders Section End -->

    <!-- Red Flag Warning Section Start -->
    <div class="section section-padding red-flags-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="red-flags-intro-content">
                        <h2 class="intro-title">Why Expert Installation Matters</h2>
                        <p class="intro-description">
                            As a homeowner in the Bay Area, you know that our homes face unique challenges from earthquakes, coastal weather, and temperature fluctuations. When it comes to quality, durability and protection, premium roofing and siding materials are essential for most San Francisco, San Jose and Oakland homeowners.
                        </p>
                        <p class="intro-description">
                            But you will never get the full value of your roofing or siding project without expert installation. This is why CleanBuilders is your best choice for professional home exterior services.
                        </p>
                        <div class="intro-logo">
                            <img src="{{ asset('assets/images/CleanBuildersDark.svg') }}" alt="CleanBuilders Logo" class="intro-logo-img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="red-flags-content-card">
                        <div class="red-flags-content">
                            <div class="red-flags-header">
                                <div class="warning-icon-large">
                                    <i class="icofont-warning-alt"></i>
                                </div>
                                <div class="red-flags-titles">
                                    <h3 class="red-flags-subtitle">Don't Hire the Wrong Installer</h3>
                                    <h2 class="red-flags-title">Red Flags to Look Out for:</h2>
                                </div>
                            </div>
                            <div class="red-flags-list">
                                <ul class="list-unstyled">
                                    <li><i class="icofont-ui-close"></i> Door-to-door sales</li>
                                    <li><i class="icofont-ui-close"></i> No written estimates</li>
                                    <li><i class="icofont-ui-close"></i> Cash-only payments</li>
                                    <li><i class="icofont-ui-close"></i> No local address</li>
                                    <li><i class="icofont-ui-close"></i> Pressure tactics</li>
                                    <li><i class="icofont-ui-close"></i> No insurance proof</li>
                                    <li><i class="icofont-ui-close"></i> Limited experience</li>
                                    <li><i class="icofont-ui-close"></i> Improper installation</li>
                                    <li><i class="icofont-ui-close"></i> Product failure</li>
                                    <li><i class="icofont-ui-close"></i> Voided warranty</li>
                                </ul>
                            </div>
                            <p class="red-flags-description">
                                Choose CleanBuilders: Licensed, insured, local Bay Area contractors with transparent pricing and proven track record.
                            </p>
                            <div class="red-flags-cta">
                                <a href="tel:855-355-0515" class="btn btn-schedule">
                                    Free Consultation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Red Flag Warning Section End -->

    <!-- Before/After Transformations Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Start -->
                    <div class="section-title text-center" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title">Amazing Home Transformations</h2>
                        <p class="subtitle text-muted mb-5">See the incredible difference our expert craftsmanship makes</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <!-- Before/After Comparisons Start -->
            <div class="before-after-grid" data-aos="fade-up" data-aos-delay="400">
                <div class="row">
                    
                    <!-- Comparison 1 -->
                    <div class="col-lg-4 col-md-12 col-sm-12 mb-4 mb-lg-0 h-100">
                        <div class="before-after-item h-100">
                            <div class="before-after-container">
                                <div class="before-after-wrapper">
                                    <div class="before-image">
                                        <img src="{{ asset('assets/images/photos/IMG-20250620-WA0001.jpg') }}" alt="Before Roofing" class="img-fluid">
                                        <div class="image-label before-label">Before</div>
                                    </div>
                                    <div class="after-image">
                                        <img src="{{ asset('assets/images/photos/IMG-20250701-WA0045.jpg') }}" alt="After Roofing" class="img-fluid">
                                        <div class="image-label after-label">After</div>
                                    </div>
                                    <div class="slider-handle">
                                        <div class="slider-button">
                                            <i class="icofont-curved-double-left"></i>
                                            <i class="icofont-curved-double-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="transformation-info text-center mt-4">
                                <h4>Complete Roof Replacement</h4>
                                <p class="text-muted">San Jose, CA - GAF Timberline HD Shingles</p>
                            </div>
                        </div>
                    </div>

                    <!-- Comparison 2 -->
                    <div class="col-lg-4 col-md-12 col-sm-12 mb-4 mb-lg-0 h-100">
                        <div class="before-after-item h-100">
                            <div class="before-after-container">
                                <div class="before-after-wrapper">
                                    <div class="before-image">
                                        <img src="{{ asset('assets/images/photos/IMG-20250701-WA0018.jpg') }}" alt="Before Siding" class="img-fluid">
                                        <div class="image-label before-label">Before</div>
                                    </div>
                                    <div class="after-image">
                                        <img src="{{ asset('assets/images/photos/IMG-20250701-WA0027.jpg') }}" alt="After Siding" class="img-fluid">
                                        <div class="image-label after-label">After</div>
                                    </div>
                                    <div class="slider-handle">
                                        <div class="slider-button">
                                            <i class="icofont-curved-double-left"></i>
                                            <i class="icofont-curved-double-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="transformation-info text-center mt-4">
                                <h4>James Hardie Siding Installation</h4>
                                <p class="text-muted">Fremont, CA - Fiber Cement Siding</p>
                            </div>
                        </div>
                    </div>

                    <!-- Comparison 3 -->
                    <div class="col-lg-4 col-md-12 col-sm-12 mb-4 mb-lg-0 h-100">
                        <div class="before-after-item h-100">
                            <div class="before-after-container">
                                <div class="before-after-wrapper">
                                    <div class="before-image">
                                        <img src="{{ asset('assets/images/photos/IMG-20250620-WA0038.jpg') }}" alt="Before Deck" class="img-fluid">
                                        <div class="image-label before-label">Before</div>
                                    </div>
                                    <div class="after-image">
                                        <img src="{{ asset('assets/images/photos/IMG-20250620-WA0061.jpg') }}" alt="After Deck" class="img-fluid">
                                        <div class="image-label after-label">After</div>
                                    </div>
                                    <div class="slider-handle">
                                        <div class="slider-button">
                                            <i class="icofont-curved-double-left"></i>
                                            <i class="icofont-curved-double-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="transformation-info text-center mt-4">
                                <h4>Custom Deck Construction</h4>
                                <p class="text-muted">Palo Alto, CA - Composite Decking</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Before/After Comparisons End -->

            <!-- View All Projects Button -->
            <div class="row">
                <div class="col-12">
                                    <div class="text-center btn-section-spacing" data-aos="fade-up" data-aos-delay="600">
                    <a href="#" class="btn btn-schedule">
                        View All Transformations
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Before/After Transformations Section End -->

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
                            <img src="{{ asset('assets/images/photos/IMG-20250701-WA0045.jpg') }}" alt="Roofing Services" class="img-fluid rounded" style="height: 250px; width: 100%; object-fit: cover;">
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
                            <img src="{{ asset('assets/images/photos/IMG-20250701-WA0027.jpg') }}" alt="Siding Services" class="img-fluid rounded" style="height: 250px; width: 100%; object-fit: cover;">
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
                            <img src="{{ asset('assets/images/photos/IMG-20250620-WA0061.jpg') }}" alt="Deck Services" class="img-fluid rounded" style="height: 250px; width: 100%; object-fit: cover;">
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
                                    <div class="text-center btn-section-spacing" data-aos="fade-up" data-aos-delay="600">
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

    <!-- YouTube Shorts Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Start -->
                    <div class="section-title text-center" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title">Watch Our Work in Action</h2>
                        <p class="subtitle text-muted mb-5">See our construction process through these short videos</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row mb-n6">
                <!-- YouTube Short 1 -->
                <div class="col-lg-3 col-md-6 mb-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="youtube-short-wrapper">
                        <div class="youtube-short-container">
                            <iframe 
                                src="https://www.youtube.com/embed/4g0tq1KQF5I?rel=0&modestbranding=1&showinfo=0" 
                                title="Roofing Installation Process #1"
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                        <h5 class="youtube-short-title">Roofing Installation Process #1</h5>
                    </div>
                </div>

                <!-- YouTube Short 2 -->
                <div class="col-lg-3 col-md-6 mb-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="youtube-short-wrapper">
                        <div class="youtube-short-container">
                            <iframe 
                                src="https://www.youtube.com/embed/9teapq0fG8s?rel=0&modestbranding=1&showinfo=0" 
                                title="Siding Installation Techniques #2"
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                        <h5 class="youtube-short-title">Siding Installation Techniques #2</h5>
                    </div>
                </div>

                <!-- YouTube Short 3 -->
                <div class="col-lg-3 col-md-6 mb-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="youtube-short-wrapper">
                        <div class="youtube-short-container">
                            <iframe 
                                src="https://www.youtube.com/embed/2vSF2mdrkUg?rel=0&modestbranding=1&showinfo=0" 
                                title="Custom Deck Building Process #3"
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                        <h5 class="youtube-short-title">Custom Deck Building Process #3</h5>
                    </div>
                </div>

                <!-- YouTube Short 4 -->
                <div class="col-lg-3 col-md-6 mb-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="youtube-short-wrapper">
                        <div class="youtube-short-container">
                            <iframe 
                                src="https://www.youtube.com/embed/bzecSPPetHc?rel=0&modestbranding=1&showinfo=0" 
                                title="Quality Construction Tips #4"
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                        <h5 class="youtube-short-title">Quality Construction Tips #4</h5>
                    </div>
                </div>
            </div>

            <!-- Subscribe Button -->
            <div class="row">
                <div class="col-12">
                                    <div class="text-center btn-section-spacing" data-aos="fade-up" data-aos-delay="700">
                    <a href="https://www.youtube.com/@CleanBuilders" target="_blank" class="btn btn-schedule">
                        <i class="icofont-youtube-play me-2"></i>
                        Subscribe to Our YouTube Channel
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- YouTube Shorts Section End -->

    <!-- Custom CSS for YouTube Shorts -->
    <style>
        .youtube-short-wrapper {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        
        .youtube-short-wrapper:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .youtube-short-container {
            position: relative;
            width: 100%;
            padding-bottom: 177.78%; /* 16:9 aspect ratio for vertical shorts (9:16) */
            height: 0;
            margin-bottom: 15px;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .youtube-short-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }
        
        .youtube-short-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            text-align: center;
            margin: 0;
            line-height: 1.4;
        }
        
        /* Mobile responsive adjustments */
        @media (max-width: 768px) {
            .youtube-short-container {
                padding-bottom: 177.78%; /* Maintain 9:16 aspect ratio on tablets */
            }
            
            .youtube-short-wrapper {
                margin-bottom: 30px;
            }
        }
        
        @media (max-width: 576px) {
            .youtube-short-container {
                padding-bottom: 177.78%; /* Maintain 9:16 aspect ratio on mobile */
            }
        }
    </style>

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

    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="video-container">
                        <iframe id="videoFrame" 
                                src="" 
                                title="CleanBuilders Video" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <!-- Custom CSS for Video Button and Modal -->
    <style>
        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: flex-start;
        }
        
        .btn-video-custom {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            backdrop-filter: blur(10px);
        }
        
        .btn-video-custom:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }
        
        .btn-video-custom i {
            font-size: 18px;
        }
        
        /* Video Modal Styles */
        .modal-content {
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }
        
        .modal-header {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 1000;
            background: none;
            padding: 0;
        }
        
        .btn-close {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }
        
        .video-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        /* Mobile responsive */
        @media (max-width: 991px) {
            .hero-buttons {
                justify-content: center;
                text-align: center;
                flex-direction: column;
            }
            
            .btn-video-custom,
            .btn-primary-custom {
                width: 100%;
                justify-content: center;
                margin-bottom: 10px;
            }
        }
        
        /* Desktop adjustments */
        @media (min-width: 992px) {
            .hero-buttons {
                justify-content: flex-start;
            }
        }
    </style>

    <!-- JavaScript for Video Modal and Sticky CTA -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Disable all Swiper animations
            if (window.Swiper) {
                // Override Swiper default settings
                const originalSwiper = window.Swiper;
                window.Swiper = function(container, options) {
                    if (options) {
                        options.speed = 0;
                        options.autoplay = false;
                        options.effect = 'slide';
                        options.parallax = false;
                        options.loop = false;
                        options.freeMode = false;
                        options.cssMode = true;
                    }
                    return new originalSwiper(container, options);
                };
            }

            const videoModal = document.getElementById('videoModal');
            const videoFrame = document.getElementById('videoFrame');
            const videoUrl = 'https://www.youtube.com/embed/0vYohqeviOQ?autoplay=1&rel=0&modestbranding=1';
            
            // Load video when modal opens
            videoModal.addEventListener('show.bs.modal', function() {
                videoFrame.src = videoUrl;
            });
            
            // Stop video when modal closes
            videoModal.addEventListener('hide.bs.modal', function() {
                videoFrame.src = '';
            });

            // Sticky CTA Bar Logic
            const stickyCTA = document.getElementById('stickyCTA');
            const stickyCTAClose = document.getElementById('stickyCTAClose');
            const heroSection = document.querySelector('.hero-slider');
            
            // Track if CTA was closed in current session
            let isCTAClosed = false;

            function showStickyCTA() {
                if (stickyCTA && !isCTAClosed) {
                    stickyCTA.classList.add('show');
                    document.body.classList.add('sticky-cta-visible');
                }
            }

            function hideStickyCTA() {
                if (stickyCTA) {
                    stickyCTA.classList.remove('show');
                    document.body.classList.remove('sticky-cta-visible');
                }
            }

            function closeStickyCtaForSession() {
                isCTAClosed = true;
                hideStickyCTA();
            }

            // Close sticky CTA when close button is clicked
            if (stickyCTAClose) {
                stickyCTAClose.addEventListener('click', closeStickyCtaForSession);
            }

            // Show sticky CTA when user scrolls past hero section (only if not closed in current session)
            window.addEventListener('scroll', function() {
                if (heroSection && !isCTAClosed) {
                    const heroBottom = heroSection.offsetTop + heroSection.offsetHeight;
                    const scrollPosition = window.pageYOffset;
                    
                    if (scrollPosition > heroBottom - 100) {
                        showStickyCTA();
                    } else {
                        hideStickyCTA();
                    }
                }
            });

            // Before/After слайдеры теперь статичные, Swiper не нужен

            // Before/After Image Slider Interaction
            document.querySelectorAll('.before-after-wrapper').forEach(wrapper => {
                const afterImage = wrapper.querySelector('.after-image');
                const sliderHandle = wrapper.querySelector('.slider-handle');
                let isDragging = false;
                let startX = 0;

                function updateSlider(e) {
                    const rect = wrapper.getBoundingClientRect();
                    const x = (e.clientX || (e.touches && e.touches[0] ? e.touches[0].clientX : startX)) - rect.left;
                    const percentage = Math.max(0, Math.min(100, (x / rect.width) * 100));
                    
                    // Убираем transition во время перетаскивания
                    afterImage.style.transition = 'none';
                    afterImage.style.clipPath = `polygon(${percentage}% 0%, 100% 0%, 100% 100%, ${percentage}% 100%)`;
                    sliderHandle.style.left = `${percentage}%`;
                    sliderHandle.style.transform = `translate(-50%, -50%)`;
                }

                function stopDragging() {
                    isDragging = false;
                    // Возвращаем transition
                    afterImage.style.transition = 'clip-path 0.1s ease';
                    document.body.style.cursor = 'default';
                    document.body.style.userSelect = 'auto';
                }

                // Mouse events
                sliderHandle.addEventListener('mousedown', (e) => {
                    isDragging = true;
                    startX = e.clientX;
                    document.body.style.cursor = 'ew-resize';
                    document.body.style.userSelect = 'none';
                    e.preventDefault();
                    e.stopPropagation();
                });

                document.addEventListener('mousemove', (e) => {
                    if (isDragging) {
                        updateSlider(e);
                        e.preventDefault();
                    }
                });

                document.addEventListener('mouseup', () => {
                    if (isDragging) {
                        stopDragging();
                    }
                });

                // Touch events
                sliderHandle.addEventListener('touchstart', (e) => {
                    isDragging = true;
                    startX = e.touches[0].clientX;
                    e.preventDefault();
                    e.stopPropagation();
                });

                document.addEventListener('touchmove', (e) => {
                    if (isDragging) {
                        updateSlider(e);
                        e.preventDefault();
                    }
                }, { passive: false });

                document.addEventListener('touchend', () => {
                    if (isDragging) {
                        stopDragging();
                    }
                });

                // Click to position (на всей области, кроме handle)
                wrapper.addEventListener('click', (e) => {
                    if (!isDragging && e.target !== sliderHandle && !sliderHandle.contains(e.target)) {
                        updateSlider(e);
                        // Возвращаем transition после клика
                        setTimeout(() => {
                            afterImage.style.transition = 'clip-path 0.1s ease';
                        }, 10);
                    }
                });

                // Предотвращаем клик на handle
                sliderHandle.addEventListener('click', (e) => {
                    e.stopPropagation();
                });
            });
        });
    </script>

@endsection  
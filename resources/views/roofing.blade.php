@extends('layouts.gothic')

@section('title', 'Professional Roofing Services in Bay Area - CleanBuilders')

@section('roofing_active', 'active')

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
                            <img src="{{ asset('assets/images/slider/CleanBuildersBackground.webp') }}" alt="Roofing Services" />
                        </div>
                        <!-- Hero Slider Bg image End -->

                        <!-- Hero Slider Content Start -->
                        <div class="container">
                            <div class="hero-content-wrapper">
                                <div class="hero-text-content">
                                    <div class="hero-slide-content">
                                        <h4 class="subtitle">Bay Area Roofing Experts</h4>
                                        <h2 class="title">
                                            Premium <span class="services-highlight">Roofing Solutions</span> <br />
                                            for <span class="services-highlight">Bay Area Homes</span>
                                        </h2>
                                        <p class="hero-description">Protect your home with expert roofing installation, repair, and replacement services. We use only premium materials and provide comprehensive warranties for complete peace of mind.</p>
                                        <div class="hero-buttons">
                                            <a href="#" class="btn-custom btn-primary-custom d-lg-none">Get Free Roofing Quote</a>
                                            <a href="#" class="btn-custom btn-video-custom" data-bs-toggle="modal" data-bs-target="#videoModal">
                                                <i class="icofont-ui-play me-2"></i>Watch Our Work
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-form-content d-none d-lg-block">
                                    <div class="hero-contact-form">
                                        <h3>Get Free Roofing Quote</h3>
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
                                                <textarea id="message" name="message" class="form-control" placeholder="Tell us about your roofing needs..." rows="4"></textarea>
                                            </div>
                                            <button type="submit" class="btn-form-submit">Get My Free Quote</button>
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

    <!-- Roofing Process Section Start -->
    <div class="section section-padding overflow-hidden how-we-work-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <h1 class="title">Our Roofing Process</h1>
                        <div class="subtitle-spacer" style="height: 80px;"></div>
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
                                <i class="icofont-search-2"></i>
                            </div>
                            <h5 class="process-title">Free Roof Inspection</h5>
                            <p class="process-description">Complete assessment of material condition and repair needs.</p>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                        <div class="process-step text-center">
                            <div class="process-icon">
                                <i class="icofont-calculator-alt-2"></i>
                            </div>
                            <h5 class="process-title">Detailed Quote</h5>
                            <p class="process-description">Transparent pricing with materials and timeline breakdown.</p>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                        <div class="process-step text-center">
                            <div class="process-icon">
                                <i class="icofont-paper"></i>
                            </div>
                            <h5 class="process-title">Permits & Materials</h5>
                            <p class="process-description">We handle permits and order premium materials.</p>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                        <div class="process-step text-center">
                            <div class="process-icon">
                                <i class="icofont-hammer"></i>
                            </div>
                            <h5 class="process-title">Expert Installation</h5>
                            <p class="process-description">Professional installation with comprehensive warranty.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Work Process Steps End -->
            
            <div class="text-center btn-section-spacing">
                <a href="tel:855-355-0515" class="btn btn-schedule">
                    <i class="icofont-phone me-2"></i>
                    Schedule Free Inspection
                </a>
            </div>
        </div>
    </div>
    <!-- Roofing Process Section End -->

    <!-- Sticky CTA Bar Start -->
    <div class="sticky-cta-bar" id="stickyCTA">
        <button class="sticky-cta-close" id="stickyCTAClose" aria-label="Закрыть">
            <i class="icofont-close"></i>
        </button>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="cta-content">
                        <h4 class="cta-title mb-0">Need Roofing Services?</h4>
                        <p class="cta-subtitle mb-0">Get your free roofing inspection today - Bay Area's trusted roofing experts</p>
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

    <!-- Why Choose Us for Roofing Section Start -->
    <div class="section section-padding why-cleanbuilders-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Content -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
                    <div class="why-cleanbuilders-content">
                        <h2 class="why-title">Why Choose CleanBuilders for Roofing?</h2>
                        <h3 class="why-subtitle">Bay Area's Most Trusted Roofing Specialists</h3>
                        <p class="why-description">
                            With years of experience serving Bay Area homeowners, CleanBuilders is your trusted partner for all roofing needs. We specialize in premium roofing materials from leading manufacturers like GAF, CertainTeed, and Owens Corning. Our certified installers ensure your roof not only looks great but provides lasting protection for your home and family.
                        </p>
                        <div class="why-cta">
                            <a href="tel:855-355-0515" class="btn btn-schedule">
                                Free Roofing Consultation
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Images Content -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="400">
                    <div class="why-cleanbuilders-images">
                        <div class="images-grid">
                            <div class="image-item">
                                <img src="{{ asset('assets/images/photos/IMG-20250701-WA0045.jpg') }}" alt="Roofing Installation" class="img-fluid rounded">
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('assets/images/photos/IMG-20250701-WA0044.jpg') }}" alt="Roof Replacement" class="img-fluid rounded">
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('assets/images/photos/IMG-20250701-WA0043.jpg') }}" alt="Quality Roofing Materials" class="img-fluid rounded">
                            </div>
                            <div class="image-item">
                                <img src="{{ asset('assets/images/photos/IMG-20250701-WA0042.jpg') }}" alt="Professional Roofing Team" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us for Roofing Section End -->

    <!-- Roofing Services Section Start -->
    <div class="section section-padding red-flags-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="red-flags-intro-content">
                        <h2 class="intro-title">Complete Roofing Services</h2>
                        <p class="intro-description">
                            From emergency repairs to complete roof replacements, CleanBuilders provides comprehensive roofing solutions for Bay Area homes. We work with all roofing materials and styles to match your home's architecture and budget.
                        </p>
                        <div class="roofing-services-list">
                            <ul class="list-unstyled">
                                <li><i class="icofont-check-circled text-success me-2"></i> Roof Replacement & Installation</li>
                                <li><i class="icofont-check-circled text-success me-2"></i> Emergency Roof Repairs</li>
                                <li><i class="icofont-check-circled text-success me-2"></i> Roof Maintenance & Inspections</li>
                                <li><i class="icofont-check-circled text-success me-2"></i> Gutter Installation & Repair</li>
                                <li><i class="icofont-check-circled text-success me-2"></i> Skylight Installation</li>
                                <li><i class="icofont-check-circled text-success me-2"></i> Ventilation Systems</li>
                            </ul>
                        </div>
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
                                    <h3 class="red-flags-subtitle">Roofing Red Flags</h3>
                                    <h2 class="red-flags-title">Signs You Need a New Roof:</h2>
                                </div>
                            </div>
                            <div class="red-flags-list">
                                <ul class="list-unstyled">
                                    <li><i class="icofont-ui-close"></i> Missing or damaged shingles</li>
                                    <li><i class="icofont-ui-close"></i> Granule loss in gutters</li>
                                    <li><i class="icofont-ui-close"></i> Water stains on ceilings</li>
                                    <li><i class="icofont-ui-close"></i> Sagging roof deck</li>
                                    <li><i class="icofont-ui-close"></i> Increased energy bills</li>
                                    <li><i class="icofont-ui-close"></i> Age over 20 years</li>
                                    <li><i class="icofont-ui-close"></i> Moss or algae growth</li>
                                    <li><i class="icofont-ui-close"></i> Cracked or curling shingles</li>
                                    <li><i class="icofont-ui-close"></i> Daylight through roof boards</li>
                                    <li><i class="icofont-ui-close"></i> Damaged flashing</li>
                                </ul>
                            </div>
                            <p class="red-flags-description">
                                Don't wait for major damage. Get a free inspection from CleanBuilders today.
                            </p>
                            <div class="red-flags-cta">
                                <a href="tel:855-355-0515" class="btn btn-schedule">
                                    Free Roof Inspection
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Roofing Services Section End -->

    <!-- Before/After Roofing Transformations Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Start -->
                    <div class="section-title text-center" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title">Amazing Roofing Transformations</h2>
                        <p class="subtitle text-muted mb-5">See how our expert roofing services transform Bay Area homes</p>
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
                                        <img src="{{ asset('assets/images/photos/IMG-20250620-WA0001.jpg') }}" alt="Before Roof Replacement" class="img-fluid">
                                        <div class="image-label before-label">Before</div>
                                    </div>
                                    <div class="after-image">
                                        <img src="{{ asset('assets/images/photos/IMG-20250701-WA0045.jpg') }}" alt="After Roof Replacement" class="img-fluid">
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
                                        <img src="{{ asset('assets/images/photos/IMG-20250701-WA0041.jpg') }}" alt="Before Roof Repair" class="img-fluid">
                                        <div class="image-label before-label">Before</div>
                                    </div>
                                    <div class="after-image">
                                        <img src="{{ asset('assets/images/photos/IMG-20250701-WA0044.jpg') }}" alt="After Roof Repair" class="img-fluid">
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
                                <h4>Roof Repair & Restoration</h4>
                                <p class="text-muted">Fremont, CA - CertainTeed Landmark Shingles</p>
                            </div>
                        </div>
                    </div>

                    <!-- Comparison 3 -->
                    <div class="col-lg-4 col-md-12 col-sm-12 mb-4 mb-lg-0 h-100">
                        <div class="before-after-item h-100">
                            <div class="before-after-container">
                                <div class="before-after-wrapper">
                                    <div class="before-image">
                                        <img src="{{ asset('assets/images/photos/IMG-20250701-WA0040.jpg') }}" alt="Before Roof Installation" class="img-fluid">
                                        <div class="image-label before-label">Before</div>
                                    </div>
                                    <div class="after-image">
                                        <img src="{{ asset('assets/images/photos/IMG-20250701-WA0043.jpg') }}" alt="After Roof Installation" class="img-fluid">
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
                                <h4>New Roof Installation</h4>
                                <p class="text-muted">Palo Alto, CA - Owens Corning Duration Shingles</p>
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
                            View All Roofing Projects
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Before/After Roofing Transformations Section End -->

    <!-- Roofing Materials Section Start -->
    <div class="section section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Start -->
                    <div class="section-title text-center" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title">Premium Roofing Materials</h2>
                        <p class="subtitle text-muted mb-5">We work with the industry's leading manufacturers</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row mb-n8">
                <!-- GAF Roofing Start -->
                <div class="col-lg-4 col-md-6 mb-8" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item text-center d-block text-decoration-none text-dark position-relative">
                        <!-- Service Image Start -->
                        <div class="service-image mb-4">
                            <img src="{{ asset('assets/images/photos/IMG-20250701-WA0045.jpg') }}" alt="GAF Roofing Materials" class="img-fluid rounded" style="height: 250px; width: 100%; object-fit: cover;">
                        </div>
                        <!-- Service Image End -->
                        
                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h4 class="service-title mb-3">GAF Roofing Systems</h4>
                            <p class="service-description mb-4">America's largest roofing manufacturer with comprehensive warranty coverage and premium materials.</p>
                        </div>
                        <!-- Service Content End -->
                    </div>
                </div>
                <!-- GAF Roofing End -->
                
                <!-- CertainTeed Roofing Start -->
                <div class="col-lg-4 col-md-6 mb-8" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item text-center d-block text-decoration-none text-dark position-relative">
                        <!-- Service Image Start -->
                        <div class="service-image mb-4">
                            <img src="{{ asset('assets/images/photos/IMG-20250701-WA0044.jpg') }}" alt="CertainTeed Roofing Materials" class="img-fluid rounded" style="height: 250px; width: 100%; object-fit: cover;">
                        </div>
                        <!-- Service Image End -->
                        
                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h4 class="service-title mb-3">CertainTeed Roofing</h4>
                            <p class="service-description mb-4">Innovative roofing solutions known for durability, energy efficiency, and aesthetic appeal.</p>
                        </div>
                        <!-- Service Content End -->
                    </div>
                </div>
                <!-- CertainTeed Roofing End -->
                
                <!-- Owens Corning Roofing Start -->
                <div class="col-lg-4 col-md-6 mb-8" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item text-center d-block text-decoration-none text-dark position-relative">
                        <!-- Service Image Start -->
                        <div class="service-image mb-4">
                            <img src="{{ asset('assets/images/photos/IMG-20250701-WA0043.jpg') }}" alt="Owens Corning Roofing Materials" class="img-fluid rounded" style="height: 250px; width: 100%; object-fit: cover;">
                        </div>
                        <!-- Service Image End -->
                        
                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h4 class="service-title mb-3">Owens Corning</h4>
                            <p class="service-description mb-4">Trusted roofing materials with advanced technology for superior weather protection.</p>
                        </div>
                        <!-- Service Content End -->
                    </div>
                </div>
                <!-- Owens Corning Roofing End -->
            </div>
            
            <!-- Get Quote Button Start -->
            <div class="row">
                <div class="col-12">
                    <div class="text-center btn-section-spacing" data-aos="fade-up" data-aos-delay="600">
                        <a href="tel:855-355-0515" class="btn btn-schedule">
                            Get Free Roofing Quote
                        </a>
                    </div>
                </div>
            </div>
            <!-- Get Quote Button End -->
        </div>
    </div>
    <!-- Roofing Materials Section End -->

    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="video-container">
                        <iframe id="videoFrame" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <!-- Custom CSS -->
    <style>
        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
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

        .roofing-services-list {
            margin: 30px 0;
        }

        .roofing-services-list ul li {
            margin-bottom: 10px;
            font-size: 16px;
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
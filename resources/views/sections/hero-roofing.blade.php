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
                        <img src="{{ asset('assets/images/photos/IMG-20250701-WA0045.jpg') }}" alt="Professional Roofing Services" />
                    </div>
                    <!-- Hero Slider Bg image End -->

                    <!-- Hero Slider Content Start -->
                    <div class="container">
                        <div class="hero-content-wrapper row">
                            <div class="hero-text-content col-lg-6">
                                <div class="hero-slide-content">
                                    <h4 class="subtitle">Bay Area Roofing Experts</h4>
                                    <h2 class="title">
                                        Premium <span class="services-highlight">Roofing Services</span> <br />
                                        for Your <span class="services-highlight">Bay Area Home</span>
                                    </h2>
                                    <p class="hero-description">Professional roofing services with quality craftsmanship. From repairs to complete roof replacements.</p>
                                    <div class="hero-buttons">
                                        <a href="tel:855-355-0515" class="btn-custom btn-primary-custom d-lg-none">Free Roof Inspection</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-form-content d-none d-lg-block col-lg-6">
                                <div class="hero-contact-form">
                                    <h3>Get Free Roof Inspection</h3>
                                    <form action="#" method="POST">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Full Name *" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone Number *" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea id="message" name="message" class="form-control" placeholder="Describe your roofing needs..." rows="2"></textarea>
                                        </div>
                                        <button type="submit" class="btn-form-submit">Schedule Free Inspection</button>
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

    <div class="scroll-down-arrow-wrapper" style="position: absolute; left: 0; right: 0; bottom: 30px; z-index: 10; text-align: center;">
        <a href="#footer" class="scroll-down-arrow" style="display: inline-block; color: #fff; font-size: 38px; opacity: 0.85; transition: opacity 0.2s;">
            <i class="icofont-simple-down"></i>
        </a>
    </div>

</div>
<!-- Hero Section End --> 
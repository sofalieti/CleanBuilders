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
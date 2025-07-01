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
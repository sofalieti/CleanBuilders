<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $domain->title }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <!-- Hero Banner -->
        <section class="hero-banner">
            <div class="parallax-bg"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="display-4 fw-bold mb-4">{{ $domain->title }}</h1>
                    <p class="lead mb-4">{{ $domain->description }}</p>
                    <a href="#contact" class="btn btn-primary btn-lg">Get a Free Quote</a>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="section bg-light"> 
            <div class="container">
                <h2 class="text-center section-title">Our Services 2</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-card text-center">
                            <i class="fas fa-tools feature-icon"></i>
                            <h3>Repair Services</h3>
                            <p>Professional repair of all infrared sauna components including heaters, control panels, and wiring.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card text-center">
                            <i class="fas fa-cogs feature-icon"></i>
                            <h3>Maintenance</h3>
                            <p>Regular maintenance services to keep your sauna running efficiently and extend its lifespan.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card text-center">
                            <i class="fas fa-home feature-icon"></i>
                            <h3>Installation</h3>
                            <p>Expert installation of new infrared saunas with proper setup and safety checks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Domain Content Section -->
        @if($domain->content)
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="domain-content">
                            {!! $domain->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        <!-- Gallery Section -->
        @if($domain->attachment->count() > 0)
        <section class="section">
            <div class="container">
                <h2 class="text-center section-title">Галерея</h2>
                <div class="row">
                    @foreach($domain->attachment as $image)
                    <div class="col-md-4 mb-4">
                        <div class="gallery-item">
                            <img src="{{ $image->url() }}" 
                                 alt="{{ $image->original_name }}" 
                                 class="img-fluid rounded">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif

        <!-- Contact Form -->
        <section id="contact" class="section">
            <div class="container">
                <h2 class="text-center section-title">Contact Us</h2>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="contact-form">
                            <form>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="section bg-light">
            <div class="container">
                <div class="map-container">
                    <iframe src="{{ $domain->google_maps }}" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                    </iframe>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Contact Info</h4>
                        <p><i class="fas fa-phone"></i> {{ $domain->phone }}</p>
                        <p><i class="fas fa-envelope"></i> {{ $domain->email }}</p>
                        <p><i class="fas fa-map-marker-alt"></i> {{ $domain->address }}</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Home</a></li>
                            <li><a href="#" class="text-white">Services</a></li>
                            <li><a href="#" class="text-white">About Us</a></li>
                            <li><a href="#" class="text-white">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Follow Us</h4>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="text-center">
                    <p>&copy; 2024 {{ $domain->title }}. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const parallaxBg = document.querySelector('.parallax-bg');
                let lastScroll = 0;

                function updateParallax() {
                    const scroll = window.pageYOffset;
                    const speed = 0.5;
                    const yPos = -(scroll * speed);
                    parallaxBg.style.transform = `translate3d(0, ${yPos}px, 0)`;
                    lastScroll = scroll;
                }

                window.addEventListener('scroll', function() {
                    requestAnimationFrame(updateParallax);
                });

                // Инициализация при загрузке
                updateParallax();
            });
        </script>
    </body>
</html>

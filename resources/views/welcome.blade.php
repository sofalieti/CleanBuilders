@extends('layouts.app')

@section('content')
    <!-- Header with Logo and Banner -->
    <header class="site-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    @if($domain->attachment()->where('group', 'logo')->first())
                        <img src="{{ $domain->attachment()->where('group', 'logo')->first()->url() }}" 
                             alt="Logo" 
                             class="logo-img">
                    @endif
                </div>
                <div class="col-md-9">
                    <nav class="main-menu">
                        <ul class="nav justify-content-end">
                            @foreach($menuItems as $item)
                                @if($item->children->isEmpty())
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ $item->link }}">{{ $item->title }}</a>
                                    </li>
                                @else
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ $item->link }}" role="button" data-bs-toggle="dropdown">
                                            {{ $item->title }}
                                        </a>
                                        <ul class="dropdown-menu">
                                            @foreach($item->children as $child)
                                                <li>
                                                    <a class="dropdown-item" href="{{ $child->link }}">{{ $child->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Banner -->
    <section class="hero-banner">
        @if($domain->attachment()->where('group', 'banner')->first())
            <div class="parallax-bg" style="background-image: url('{{ $domain->attachment()->where('group', 'banner')->first()->url() }}');"></div>
        @else
            <div class="parallax-bg"></div>
        @endif
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
            <h2 class="text-center section-title">Our Services</h2>
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
            <h2 class="text-center section-title">Gallery</h2>
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

    @push('scripts')
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

            // Initialize on load
            updateParallax();
        });
    </script>
    @endpush
@endsection

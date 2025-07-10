@extends('layouts.gothic')

@section('content')
    <!-- Header with Logo and Banner -->
    <header class="site-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <img src="/images/logo.png" alt="Логотип" style="max-width: 200px; margin: 20px auto; display: block;" />
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
    <section class="hero-banner hero-slide-bg">
        <div class="parallax-bg" style="background-image: url('/images/banner.jpg'); height: 100vh; background-size: cover; background-position: center;"></div>
        <div class="container">
            <div class="hero-content-wrapper">
                <div class="hero-text-content">
                    <div class="hero-slide-content">
                        <h1 class="title">Добро пожаловать на <span class="services-highlight">сайт строительной компании</span>!</h1>
                        <p class="lead">Это пример статического описания вашего проекта. Здесь вы можете разместить любую информацию о компании, услугах или преимуществах.</p>
                        <div class="hero-buttons">
                            <a href="#contact" class="btn-custom btn-primary-custom">Получить консультацию</a>
                            <a href="#services" class="btn-custom btn-secondary-custom">Наши услуги</a>
                        </div>
                    </div>
                </div>
                <div class="hero-form-content">
                    <div class="hero-contact-form">
                        <h3>Get A Free Consult</h3>
                        <form>
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
    </section>

    <!-- About Section -->
    <section class="section bg-light">
        <div class="container">
            <h2 class="text-center section-title">Наши услуги</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <i class="fas fa-tools feature-icon"></i>
                        <h3>Ремонт</h3>
                        <p>Профессиональный ремонт оборудования и техники.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <i class="fas fa-cogs feature-icon"></i>
                        <h3>Обслуживание</h3>
                        <p>Регулярное техническое обслуживание для долгой работы.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <i class="fas fa-home feature-icon"></i>
                        <h3>Установка</h3>
                        <p>Профессиональный монтаж и настройка оборудования.</p>
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
            <h2 class="text-center section-title">Наши работы</h2>
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
            <h2 class="text-center mb-4">Где мы находимся</h2>
            <div class="map-container">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aexample" width="100%" height="300" frameborder="0"></iframe>
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


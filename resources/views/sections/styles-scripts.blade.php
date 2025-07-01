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
<!-- Work Gallery Section Start -->
<section class="work-gallery-section section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="gallery-header text-center mb-4">
                    <h2 class="section-title mb-4">Our Recent Projects</h2>
                    <p class="gallery-subtitle">
                        @if(isset($categoryName))
                            {{ $categoryName }} projects across the Bay Area
                        @else
                            Quality roofing installations across the Bay Area
                        @endif
                    </p>
                </div>
            </div>
        </div>
        
        <div class="gallery-tiles-container">
            @if(isset($roofingProjects) && $roofingProjects->count() > 0)
                @php
                    $allImages = collect();
                    foreach($roofingProjects as $project) {
                        $imagesByCategory = $project->getImagesByCategory();
                        foreach($imagesByCategory as $categoryId => $categoryImages) {
                            $category = $project->categories->find($categoryId);
                            if($category && $category->name === 'Roofing') {
                                foreach($categoryImages as $image) {
                                    $allImages->push([
                                        'image' => $image,
                                        'project_name' => $project->name,
                                        'project_description' => $project->description
                                    ]);
                                }
                            }
                        }
                    }
                    $displayImages = $allImages->take(6);
                @endphp
                @foreach($displayImages as $index => $imageData)
                    @php
                        $delay = ($index + 1) * 100;
                    @endphp
                    <div class="gallery-tile" data-aos="fade-up" data-aos-delay="{{ $delay }}" 
                         onclick="openImageModal('{{ $imageData['image']->url() }}', '{{ $imageData['project_name'] }}', 'Roofing')">
                        <img src="{{ $imageData['image']->url() }}" 
                             alt="{{ $imageData['project_name'] }}" 
                             class="img-fluid rounded shadow-sm"
                             style="width: 100%; height: 500px; object-fit: cover; cursor: pointer;">
                        <div class="gallery-tile-overlay">
                            <div class="gallery-tile-content">
                                <i class="icofont-eye"></i>
                                <h5>{{ $imageData['project_name'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                @php
                    $staticImages = [
                        'assets/images/photos/IMG-20250701-WA0028.jpg',
                        'assets/images/photos/IMG-20250701-WA0045.jpg',
                        'assets/images/photos/IMG-20250701-WA0031.jpg',
                        'assets/images/photos/IMG-20250701-WA0036.jpg',
                        'assets/images/photos/IMG-20250701-WA0027.jpg',
                        'assets/images/photos/IMG-20250701-WA0029.jpg'
                    ];
                    $titles = [
                        'Residential Roofing',
                        'Shingle Installation',
                        'Commercial Roofing',
                        'Metal Roofing',
                        'Siding Work',
                        'Roof Repair'
                    ];
                @endphp
                @foreach($staticImages as $index => $imagePath)
                    @php
                        $delay = ($index + 1) * 100;
                    @endphp
                    <div class="gallery-tile" data-aos="fade-up" data-aos-delay="{{ $delay }}"
                         onclick="openImageModal('{{ asset($imagePath) }}', '{{ $titles[$index] }}', 'Roofing')">
                        <img src="{{ asset($imagePath) }}" 
                             alt="{{ $titles[$index] }}" 
                             class="img-fluid rounded shadow-sm"
                             style="width: 100%; height: 500px; object-fit: cover; cursor: pointer;">
                        <div class="gallery-tile-overlay">
                            <div class="gallery-tile-content">
                                <i class="icofont-eye"></i>
                                <h5>{{ $titles[$index] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="gallery-cta text-center btn-section-spacing">
            <a href="tel:855-355-0515" class="btn btn-schedule">
                <i class="icofont-phone me-2"></i>
                View More Projects
            </a>
        </div>
    </div>
</section>

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-dark border-0">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center position-relative">
                <div class="image-container position-relative">
                    <img id="modalImage" src="" alt="" class="img-fluid rounded">
                    
                    <!-- Navigation arrows -->
                    <button type="button" class="btn btn-link position-absolute top-50 start-0 translate-middle-y text-white fs-1" 
                            id="prevImage" onclick="navigateImage(-1)">
                        <i class="icofont-curved-left"></i>
                    </button>
                    <button type="button" class="btn btn-link position-absolute top-50 end-0 translate-middle-y text-white fs-1" 
                            id="nextImage" onclick="navigateImage(1)">
                        <i class="icofont-curved-right"></i>
                    </button>
                </div>
                
                <div class="mt-3">
                    <h6 id="modalTitle" class="text-white"></h6>
                    <p id="modalCategory" class="text-white-50"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let currentImages = [];
let currentImageIndex = 0;

function initializeImageGallery() {
    currentImages = [];
    
    // Собираем все изображения
    @if(isset($roofingProjects) && $roofingProjects->count() > 0)
        @php
            $allImages = collect();
            
            // Собираем все изображения из категории Roofing
            foreach($roofingProjects as $project) {
                $imagesByCategory = $project->getImagesByCategory();
                foreach($imagesByCategory as $categoryId => $categoryImages) {
                    // Проверяем, что это изображения из категории Roofing
                    $category = $project->categories->find($categoryId);
                    if($category && $category->name === 'Roofing') {
                        foreach($categoryImages as $image) {
                            $allImages->push([
                                'image' => $image,
                                'project_name' => $project->name,
                                'project_description' => $project->description
                            ]);
                        }
                    }
                }
            }
            
                         // Ограничиваем до 6 изображений
             $displayImages = $allImages->take(6);
        @endphp
        
        @foreach($displayImages as $index => $imageData)
            currentImages.push({
                src: '{{ $imageData['image']->url() }}',
                title: '{{ $imageData['project_name'] }}',
                category: 'Roofing'
            });
        @endforeach
    @else
                 @php
             $staticImages = [
                 'assets/images/photos/IMG-20250701-WA0028.jpg',
                 'assets/images/photos/IMG-20250701-WA0045.jpg',
                 'assets/images/photos/IMG-20250701-WA0031.jpg',
                 'assets/images/photos/IMG-20250701-WA0036.jpg',
                 'assets/images/photos/IMG-20250701-WA0027.jpg',
                 'assets/images/photos/IMG-20250701-WA0029.jpg'
             ];
             
             $titles = [
                 'Residential Roofing',
                 'Shingle Installation',
                 'Commercial Roofing',
                 'Metal Roofing',
                 'Siding Work',
                 'Roof Repair'
             ];
         @endphp
        
        @foreach($staticImages as $index => $imagePath)
            currentImages.push({
                src: '{{ asset($imagePath) }}',
                title: '{{ $titles[$index] }}',
                category: 'Roofing'
            });
        @endforeach
    @endif
}

function openImageModal(imageSrc, title, category) {
    // Находим индекс текущего изображения
    currentImageIndex = currentImages.findIndex(img => img.src === imageSrc);
    
    showCurrentImage();
    
    const modal = new bootstrap.Modal(document.getElementById('imageModal'));
    modal.show();
}

function showCurrentImage() {
    if (currentImages.length === 0) return;
    
    const current = currentImages[currentImageIndex];
    document.getElementById('modalImage').src = current.src;
    document.getElementById('modalImage').alt = current.title;
    document.getElementById('modalTitle').textContent = current.title;
    document.getElementById('modalCategory').textContent = current.category;
    
    // Показываем/скрываем стрелки
    document.getElementById('prevImage').style.display = currentImages.length > 1 ? 'block' : 'none';
    document.getElementById('nextImage').style.display = currentImages.length > 1 ? 'block' : 'none';
}

function navigateImage(direction) {
    if (currentImages.length <= 1) return;
    
    currentImageIndex += direction;
    
    if (currentImageIndex >= currentImages.length) {
        currentImageIndex = 0;
    } else if (currentImageIndex < 0) {
        currentImageIndex = currentImages.length - 1;
    }
    
    showCurrentImage();
}

// Инициализируем галерею при загрузке страницы
document.addEventListener('DOMContentLoaded', function() {
    initializeImageGallery();
    
    // Добавляем навигацию клавиатурой
    document.addEventListener('keydown', function(e) {
        if (document.getElementById('imageModal').classList.contains('show')) {
            if (e.key === 'ArrowLeft') {
                navigateImage(-1);
            } else if (e.key === 'ArrowRight') {
                navigateImage(1);
            }
        }
    });
});
</script>

<!-- Work Gallery Section End --> 
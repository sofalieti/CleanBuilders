@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-5">Our Work Gallery</h1>
        </div>
    </div>

    <!-- Категории фильтра -->
    <div class="row mb-4">
        <div class="col-12 text-center">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-primary active" data-category="all">All Projects</button>
                @foreach($categories as $category)
                <button type="button" class="btn btn-outline-primary" data-category="{{ $category->slug }}">
                    {{ $category->name }}
                </button>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Проекты галереи -->
    <div class="row" id="gallery-projects">
        @foreach($projects as $project)
        @php
            $imagesByCategory = $project->getImagesByCategory();
            $hasImages = collect($imagesByCategory)->flatten()->isNotEmpty();
            $firstImage = null;
            $totalImages = 0;
            
            // Получаем первое изображение из любой категории и подсчитываем общее количество
            foreach($imagesByCategory as $categoryImages) {
                $totalImages += $categoryImages->count();
                if($categoryImages->count() > 0 && !$firstImage) {
                    $firstImage = $categoryImages->first();
                }
            }
        @endphp
        
        <div class="col-md-4 mb-4 gallery-item" data-category="{{ $project->categories->pluck('slug')->implode(' ') }}">
            <div class="card h-100">
                @if($firstImage)
                <img src="{{ $firstImage->url() }}" class="card-img-top" alt="{{ $project->name }}" style="height: 250px; object-fit: cover;">
                @else
                <div class="card-img-top d-flex align-items-center justify-content-center" style="height: 250px; background-color: #f8f9fa;">
                    <i class="fas fa-image fa-3x text-muted"></i>
                </div>
                @endif
                
                <div class="card-body">
                    <h5 class="card-title">{{ $project->name }}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">{{ $project->categories->pluck('name')->implode(', ') }}</small>
                        <small class="text-muted">{{ $project->formatted_project_date }}</small>
                    </div>
                    @if($totalImages > 0)
                    <div class="mt-2">
                        <small class="text-info">
                            <i class="fas fa-images"></i> {{ $totalImages }} изображений
                        </small>
                    </div>
                    @endif
                </div>
                
                <div class="card-footer">
                    <button class="btn btn-primary btn-sm" onclick="viewProject('{{ $project->slug }}')">
                        View Project
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Модальное окно для просмотра проекта -->
<div class="modal fade" id="projectModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="projectModalTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="projectModalBody">
                <!-- Содержимое будет загружено через AJAX -->
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Фильтрация по категориям
document.addEventListener('DOMContentLoaded', function() {
    const categoryButtons = document.querySelectorAll('[data-category]');
    const galleryItems = document.querySelectorAll('.gallery-item');

    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.dataset.category;
            
            // Обновляем активную кнопку
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Фильтруем проекты
            galleryItems.forEach(item => {
                if (category === 'all' || item.dataset.category.includes(category)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});

// Просмотр проекта
function viewProject(slug) {
    fetch(`/gallery/project/${slug}`)
        .then(response => response.text())
        .then(html => {
            document.getElementById('projectModalBody').innerHTML = html;
            new bootstrap.Modal(document.getElementById('projectModal')).show();
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error loading project');
        });
}
</script>
@endpush
@endsection 
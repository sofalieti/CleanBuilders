@extends('layouts.gothic')

@section('content')
    {{-- Hero Section --}}
    @include('sections.hero-roofing')

<div class="container py-5" id="projects-list">
    <h1 class="text-center mb-5">Our Projects</h1>
    <!-- Категории фильтра -->
    <div class="row mb-4">
        <div class="col-12 text-center">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-primary active" data-category="all">All Projects</button>
                @foreach(App\Models\GalleryCategory::active()->orderBy('sort_order')->get() as $category)
                <button type="button" class="btn btn-outline-primary" data-category="{{ $category->slug }}">
                    {{ $category->name }}
                </button>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            @forelse($projects as $project)
                @php $categorySlugs = $project->categories->pluck('slug')->implode(' '); @endphp
                <div class="card mb-4 shadow-sm flex-row align-items-center project-item" data-category="{{ $categorySlugs }}">
                    <div class="col-md-4 p-0">
                        @php $firstImage = $project->first_image; @endphp
                        @if($firstImage)
                            <img src="{{ $firstImage->url() }}" class="img-fluid rounded-start w-100" style="object-fit:cover; height:220px; min-width:180px;" alt="{{ $project->name }}">
                        @else
                            <div class="d-flex align-items-center justify-content-center bg-light" style="height:220px; min-width:180px;">
                                <i class="fas fa-image fa-3x text-muted"></i>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-8 p-3">
                        <h4 class="mb-2">
                            <a href="{{ route('projects.show', $project->slug) }}" class="text-decoration-none text-dark fw-bold">{{ $project->name }}</a>
                        </h4>
                        <div class="mb-2">
                            @foreach($project->categories as $category)
                                <span class="badge bg-primary me-1 mb-1">{{ $category->name }}</span>
                            @endforeach
                        </div>
                        <p class="mb-2 text-muted">{{ $project->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-secondary small">{{ $project->formatted_project_date }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-info text-center">No projects found.</div>
            @endforelse
        </div>
    </div>
</div>
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const categoryButtons = document.querySelectorAll('[data-category]');
    const projectItems = document.querySelectorAll('.project-item');

    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.dataset.category;
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            projectItems.forEach(item => {
                if (category === 'all' || item.dataset.category.includes(category)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
@endpush
@endsection 
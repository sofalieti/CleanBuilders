@extends('layouts.gothic')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-9">
            <div class="mb-4">
                <h2 class="fw-bold mb-2">{{ $project->name }}</h2>
                <div class="mb-2">
                    @foreach($project->categories as $category)
                        <span class="badge bg-primary me-1 mb-1">{{ $category->name }}</span>
                    @endforeach
                    <span class="text-secondary ms-2">{{ $project->formatted_project_date }}</span>
                </div>
                @if($project->client_name)
                    <div class="mb-1"><strong>Client:</strong> {{ $project->client_name }}</div>
                @endif
                @if($project->description)
                    <div class="mb-1"><strong>Description:</strong> {{ $project->description }}</div>
                @endif
                @if($project->project_details)
                    <div class="mb-1"><strong>Project Details:</strong> {{ $project->project_details }}</div>
                @endif
            </div>
            @php
                $imagesByCategory = $project->getImagesByCategory();
                $hasImages = collect($imagesByCategory)->flatten()->isNotEmpty();
            @endphp
            @if($hasImages)
                <div class="mt-4">
                    <h4 class="mb-3">Project Images</h4>
                    @foreach($project->categories as $category)
                        @php $categoryImages = $imagesByCategory[$category->id] ?? collect(); @endphp
                        @if($categoryImages->count() > 0)
                            <div class="mb-4">
                                <h6 class="text-primary mb-2">{{ $category->name }}</h6>
                                <div class="row g-3">
                                    @foreach($categoryImages as $image)
                                        <div class="col-6 col-md-4">
                                            <img src="{{ $image->url() }}" class="img-fluid rounded shadow-sm gallery-img" alt="{{ $image->original_name }}" style="width:100%; height:200px; object-fit:cover; cursor:pointer;" onclick="openImageModal('{{ $image->url() }}', '{{ $image->original_name }}', '{{ $category->name }}')">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Modal for image viewing -->
<div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" src="" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>
<script>
function openImageModal(imageUrl, imageName, categoryName = '') {
    document.getElementById('modalImage').src = imageUrl;
    const title = categoryName ? `${imageName} (${categoryName})` : imageName;
    document.getElementById('imageModalTitle').textContent = title;
    new bootstrap.Modal(document.getElementById('imageModal')).show();
}
</script>
@endsection 
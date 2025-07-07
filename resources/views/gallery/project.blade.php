<div class="project-details">
    <h4>{{ $project->name }}</h4>
    <p class="text-muted">{{ $project->categories->pluck('name')->implode(', ') }} • {{ $project->formatted_project_date }}</p>
    
    @if($project->client_name)
    <p><strong>Client:</strong> {{ $project->client_name }}</p>
    @endif
    
    @if($project->description)
    <p><strong>Description:</strong> {{ $project->description }}</p>
    @endif
    
    @if($project->project_details)
    <p><strong>Project Details:</strong></p>
    <p>{{ $project->project_details }}</p>
    @endif
    
    @php
        $imagesByCategory = $project->getImagesByCategory();
        $hasImages = collect($imagesByCategory)->flatten()->isNotEmpty();
    @endphp

    @if($hasImages)
    <div class="mt-4">
        <h5>Project Images</h5>
        
        @foreach($project->categories as $category)
            @php
                $categoryImages = $imagesByCategory[$category->id] ?? collect();
            @endphp
            
            @if($categoryImages->count() > 0)
            <div class="category-images-section mb-4">
                <h6 class="text-primary">{{ $category->name }}</h6>
                <div class="row">
                    @foreach($categoryImages as $image)
                    <div class="col-md-4 mb-3">
                        <img src="{{ $image->url() }}" 
                             class="img-fluid rounded" 
                             alt="{{ $image->original_name }}"
                             style="width: 100%; height: 200px; object-fit: cover; cursor: pointer;"
                             onclick="openImageModal('{{ $image->url() }}', '{{ $image->original_name }}', '{{ $category->name }}')">
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        @endforeach
    </div>
    @endif
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
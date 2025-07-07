<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class GalleryCategory extends Model
{
    use HasFactory, Filterable, AsSource;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'sort_order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    /**
     * Get the projects for this category.
     */
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(GalleryProject::class, 'gallery_project_categories');
    }

    /**
     * Get only active projects for this category.
     */
    public function activeProjects(): BelongsToMany
    {
        return $this->belongsToMany(GalleryProject::class, 'gallery_project_categories')->where('is_active', true);
    }

    /**
     * Scope a query to only include active categories.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Get the projects count for this category.
     */
    public function getProjectsCountAttribute(): int
    {
        return $this->projects()->count();
    }

    /**
     * Get the active projects count for this category.
     */
    public function getActiveProjectsCountAttribute(): int
    {
        return $this->activeProjects()->count();
    }
} 
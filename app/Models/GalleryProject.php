<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;

class GalleryProject extends Model
{
    use HasFactory, Filterable, AsSource, Attachable;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'sort_order',
        'is_active',
        'project_date',
        'client_name',
        'project_details'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'project_date' => 'date'
    ];

    /**
     * Get the categories that this project belongs to.
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(GalleryCategory::class, 'gallery_project_categories');
    }

    /**
     * Get the first category for backward compatibility.
     */
    public function getCategoryAttribute()
    {
        return $this->categories()->first();
    }

    /**
     * Scope a query to only include active projects.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to filter by category.
     */
    public function scopeByCategory($query, $categoryId)
    {
        return $query->whereHas('categories', function ($q) use ($categoryId) {
            $q->where('gallery_categories.id', $categoryId);
        });
    }

    /**
     * Get the images count for this project.
     */
    public function getImagesCountAttribute(): int
    {
        return $this->attachment()->count();
    }

    /**
     * Get the first image for this project.
     */
    public function getFirstImageAttribute()
    {
        return $this->attachment()->first();
    }

    /**
     * Get images for a specific category.
     */
    public function getCategoryImages($categoryId)
    {
        return $this->attachment()->where('group', "category_{$categoryId}")->get();
    }

    /**
     * Get all images grouped by category.
     */
    public function getImagesByCategory()
    {
        $images = $this->attachment()->get();
        $groupedImages = [];

        foreach ($images as $image) {
            if ($image->group && str_starts_with($image->group, 'category_')) {
                $categoryId = str_replace('category_', '', $image->group);
                if (!isset($groupedImages[$categoryId])) {
                    $groupedImages[$categoryId] = collect();
                }
                $groupedImages[$categoryId]->push($image);
            }
        }

        return $groupedImages;
    }

    /**
     * Get formatted project date.
     */
    public function getFormattedProjectDateAttribute(): string
    {
        return $this->project_date ? $this->project_date->format('d.m.Y') : '';
    }
} 
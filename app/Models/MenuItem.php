<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Screen\AsSource;

class MenuItem extends Model
{
    use AsSource;

    protected $fillable = [
        'title',
        'link',
        'icon',
        'sort_order',
        'parent_id',
        'is_global',
        'is_active'
    ];

    protected $casts = [
        'is_global' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(MenuItem::class, 'parent_id');
    }

    public function domains(): BelongsToMany
    {
        return $this->belongsToMany(Domain::class, 'domain_menu');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeGlobal($query)
    {
        return $query->where('is_global', true);
    }
} 
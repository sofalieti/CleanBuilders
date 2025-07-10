<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'logo',
    ];

    public function categories()
    {
        return $this->belongsToMany(GalleryCategory::class, 'brand_gallery_category');
    }

    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}

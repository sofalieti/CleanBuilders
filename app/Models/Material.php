<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'brand_id',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}

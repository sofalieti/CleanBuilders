<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;

class Domain extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
        'name',
        'title',
        'description',
        'content',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    /**
     * Get the content of the domain.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content ?? '';
    }

    /**
     * Get the description of the domain.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description ?? '';
    }
}

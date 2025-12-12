<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'description',
        'icon',
        'image',
        'is_active',
        'order',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Get localized title
     */
    public function getTitle(?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        return $this->title[$locale] ?? $this->title['en'] ?? null;
    }

    /**
     * Get localized description
     */
    public function getDescription(?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        return $this->description[$locale] ?? $this->description['en'] ?? null;
    }

    /**
     * Scope a query to only include active services
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to order by order field
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}

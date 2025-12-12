<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'position',
        'avatar',
        'content',
        'rating',
        'is_active',
        'is_featured',
        'order',
    ];

    protected $casts = [
        'name' => 'array',
        'position' => 'array',
        'content' => 'array',
        'rating' => 'integer',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Get localized name
     */
    public function getName(?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        return $this->name[$locale] ?? $this->name['en'] ?? null;
    }

    /**
     * Get localized position
     */
    public function getPosition(?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        return $this->position[$locale] ?? $this->position['en'] ?? null;
    }

    /**
     * Get localized content
     */
    public function getContent(?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        return $this->content[$locale] ?? $this->content['en'] ?? null;
    }

    /**
     * Scope a query to only include active testimonials
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include featured testimonials
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope a query to order by order field
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}

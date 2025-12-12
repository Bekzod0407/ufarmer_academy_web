<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Section extends Model
{
    protected $fillable = [
        'name',
        'title',
        'subtitle',
        'background_image',
        'background_color',
        'text_color',
        'is_active',
        'order',
    ];

    protected $casts = [
        'title' => 'array',
        'subtitle' => 'array',
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Get the section contents for the section
     */
    public function contents(): HasMany
    {
        return $this->hasMany(SectionContent::class)->orderBy('order');
    }

    /**
     * Get localized title
     */
    public function getTitle(?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        return $this->title[$locale] ?? $this->title['en'] ?? null;
    }

    /**
     * Get localized subtitle
     */
    public function getSubtitle(?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        return $this->subtitle[$locale] ?? $this->subtitle['en'] ?? null;
    }

    /**
     * Scope a query to only include active sections
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

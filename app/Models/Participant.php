<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'name',
        'organization',
        'photo',
        'bio',
        'country',
        'is_active',
        'order',
    ];

    protected $casts = [
        'name' => 'array',
        'organization' => 'array',
        'bio' => 'array',
        'is_active' => 'boolean',
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
     * Get localized organization
     */
    public function getOrganization(?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        return $this->organization[$locale] ?? $this->organization['en'] ?? null;
    }

    /**
     * Get localized bio
     */
    public function getBio(?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        return $this->bio[$locale] ?? $this->bio['en'] ?? null;
    }

    /**
     * Scope a query to only include active participants
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

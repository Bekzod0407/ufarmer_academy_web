<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SectionContent extends Model
{
    protected $fillable = [
        'section_id',
        'type',
        'key',
        'value',
        'order',
    ];

    protected $casts = [
        'value' => 'array',
        'order' => 'integer',
    ];

    /**
     * Get the section that owns the content
     */
    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }

    /**
     * Get localized value
     */
    public function getValue(?string $locale = null)
    {
        $locale = $locale ?? app()->getLocale();

        // If value is an array with locale keys
        if (is_array($this->value) && isset($this->value[$locale])) {
            return $this->value[$locale];
        }

        // If value is an array with 'en' fallback
        if (is_array($this->value) && isset($this->value['en'])) {
            return $this->value['en'];
        }

        // Return the whole value if it's not localized
        return $this->value;
    }
}

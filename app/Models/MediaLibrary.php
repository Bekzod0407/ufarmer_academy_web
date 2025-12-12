<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MediaLibrary extends Model
{
    protected $table = 'media_library';

    protected $fillable = [
        'filename',
        'original_filename',
        'path',
        'type',
        'mime_type',
        'size',
        'alt_text',
        'uploaded_by',
    ];

    protected $casts = [
        'size' => 'integer',
    ];

    /**
     * Get the user who uploaded the media
     */
    public function uploader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    /**
     * Get the full URL of the media file
     */
    public function getUrl(): string
    {
        return asset($this->path);
    }

    /**
     * Get human readable file size
     */
    public function getHumanSize(): string
    {
        $bytes = $this->size;
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }

    /**
     * Scope a query to only include images
     */
    public function scopeImages($query)
    {
        return $query->where('type', 'image');
    }

    /**
     * Scope a query to only include videos
     */
    public function scopeVideos($query)
    {
        return $query->where('type', 'video');
    }

    /**
     * Scope a query to only include documents
     */
    public function scopeDocuments($query)
    {
        return $query->where('type', 'document');
    }
}

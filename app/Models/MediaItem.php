<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaItem extends Model
{
    protected $fillable = [
        'title',
        'type',
        'content_type',
        'access_granted'
    ];

    protected $casts = [
        'access_granted' => 'boolean',
    ];
} 
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'isbn',
        'type',
        'is_available',
        'access_code'
    ];

    protected $casts = [
        'is_available' => 'boolean',
    ];
} 
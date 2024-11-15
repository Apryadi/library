<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = [
        'title',
        'publisher',
        'volume',
        'issue',
        'publication_date',
        'access_granted'
    ];

    protected $casts = [
        'publication_date' => 'date',
        'access_granted' => 'boolean',
    ];
} 
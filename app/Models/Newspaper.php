<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{
    protected $fillable = [
        'title',
        'publisher',
        'publication_date',
        'in_warehouse'
    ];

    protected $casts = [
        'publication_date' => 'date',
        'in_warehouse' => 'boolean',
    ];
} 
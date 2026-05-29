<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'id',
        'title',
        'content',
        'technology',
        'image',
        'link',
    ];

    protected $casts = [
        'technology' => 'array',
    ];
}

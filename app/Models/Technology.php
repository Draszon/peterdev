<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable = [
        'id',
        'sysadmin',
        'development',
    ];

    protected $casts = [
        'sysadmin' => 'array',
        'development' => 'array',
    ];
}

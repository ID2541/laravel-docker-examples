<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'year'
    ];

    protected $casts = [
        'year' => 'integer',
    ];
}

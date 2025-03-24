<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'content',
        'alias',
        'views',
        'tag',
        'image',
        'metatitle',
        'metadescription'
    ];

    protected $casts = [
        'tag' => 'array', // Cast tag to an array
    ];
}

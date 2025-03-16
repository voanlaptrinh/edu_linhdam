<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'status',
        'description',
        'price',
        'sale_price',
        'isbn',
        'release_date',
        'quantity',
        'category_id',
        'cover_image',
        'images',
        'tags',
        'views',
        'purchases',
        'language',
        'metatitle',
        'metadescription',

    ];

    protected $casts = [
        'images' => 'array', // Cast `images` to array
        'tags' => 'array', 
    ];

}

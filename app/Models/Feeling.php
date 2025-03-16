<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feeling extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'title', 'rating', 'content', 'is_approved'];
}

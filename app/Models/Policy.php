<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Policy extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'alias', 'content'];

    /**
     * Boot method to handle events on model creation.
     */
    protected static function boot()
    {
        parent::boot();

        // Automatically generate alias after the record is created
        static::created(function ($policy) {
            $policy->alias = Str::slug($policy->name) . '-' . $policy->id;
            $policy->save();
        });
    }
}

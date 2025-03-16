<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers'; // Tên bảng

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'birthday',
        'bio',
        'skills',
        'avatar',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'google_plus',
        'youtube',
        'github',
        'website',
        'address',
        'alias',
    ];

    protected $casts = [
        'skills' => 'array', // Chuyển đổi JSON thành mảng
        'birthday' => 'date',
    ];

    // Event "creating" - tự động tạo alias trước khi lưu vào database
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($teacher) {
            $teacher->alias = Str::slug($teacher->name) . '-' . time();
        });
    }
}

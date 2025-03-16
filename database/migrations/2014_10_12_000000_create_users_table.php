<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('username')->unique()->nullable(); // Tên người dùng duy nhất
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('image')->nullable(); // Avatar người dùng
            $table->string('address')->nullable(); // Địa chỉ mặc định
            $table->string('city')->nullable(); // Thành phố
            $table->string('state')->nullable(); // Bang/Tỉnh
            $table->string('country')->nullable(); // Quốc gia
            $table->string('postal_code')->nullable(); // Mã bưu điện
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // Giới tính
            $table->date('date_of_birth')->nullable(); // Ngày sinh
            $table->string('description')->nullable(); // Giới thiệu bản thân
            $table->string('zalo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('alias')->nullable();
            $table->boolean('is_active')->default(false); // Trạng thái tài khoản
            $table->enum('role', ['admin', 'customer', 'moderator'])->default('customer'); // Vai trò
            $table->string('preferred_language')->default('en'); // Ngôn ngữ ưu tiên
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

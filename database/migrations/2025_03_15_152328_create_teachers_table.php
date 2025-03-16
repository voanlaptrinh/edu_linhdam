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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên giáo viên
            $table->string('email')->unique(); // Email duy nhất
            $table->string('phone')->nullable(); // Số điện thoại (có thể rỗng)
            $table->string('subject'); // Môn giảng dạy
            $table->date('birthday'); // Ngày sinh
            $table->text('bio')->nullable(); // Tiểu sử giáo viên (có thể rỗng)
            $table->json('skills')->nullable(); // Lưu danh sách kỹ năng dạng JSON
            $table->string('avatar')->nullable(); // ��nh đại diện
            $table->string('facebook')->nullable(); //
            $table->string('twitter')->nullable(); //
            $table->string('instagram')->nullable(); //
            $table->string('linkedin')->nullable(); //
            $table->string('google_plus')->nullable(); //
            $table->string('youtube')->nullable(); //
            $table->string('github')->nullable(); //
            $table->string('website')->nullable(); //
            $table->string('address')->nullable(); // Địa chỉ
            $table->string('alias')->nullable(); // tên riêng
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};

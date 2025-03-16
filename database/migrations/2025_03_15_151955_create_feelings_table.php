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
        Schema::create('feelings', function (Blueprint $table) { //cảm nhận
            $table->id();
            $table->string('image')->nullable(); // Ảnh đại diện của người đánh giá
            $table->string('title'); // Tiêu đề đánh giá
            $table->unsignedTinyInteger('rating')->default(5); // Số sao (1-5)
            $table->text('content'); // Nội dung đánh giá
            $table->boolean('is_approved')->default(false); // Kiểm duyệt (true = hiển thị)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feelings');
    }
};

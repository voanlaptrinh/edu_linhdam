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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // Tên sách
            $table->string('author')->nullable(); // Tác giả
            $table->text('description')->nullable(); // Mô tả sách
            $table->integer('price')->nullable(); // Giá sách
            $table->integer('sale_price')->nullable(); // Giá sách khi giảm giá
            $table->string('isbn')->unique(); // Mã ISBN
            $table->boolean('status')->default(1); //trạng thái 
            $table->date('release_date')->nullable(); // Ngày phát hành
            $table->integer('quantity')->default(0); // Số lượng sách có sẵn
            $table->string('cover_image')->nullable(); // Ảnh bìa sách
            $table->json('images')->nullable(); // Nhiều ảnh khác lưu dưới dạng JSON
            $table->json('tags')->nullable(); // Lưu danh sách từ khóa dưới dạng JSON
            $table->integer('views')->default(0); // Lượt xem
            $table->integer('purchases')->default(0); // Lượt mua
            $table->string('language')->nullable();// ngôn ngữ sách
            $table->string('alias')->nullable();
            $table->string('metatitle')->nullable();
            $table->text('metadescription')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

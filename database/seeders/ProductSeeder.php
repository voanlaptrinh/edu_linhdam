<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Lấy danh sách danh mục con
        // $subCategories = DB::table('categorys')->whereNotNull('parent_id')->pluck('id', 'name');

        // Dữ liệu mẫu cho các sản phẩm
        $products = [
            'Danh mục con 1_1' => ['Sản phẩm A1', 'Sản phẩm A2', 'Sản phẩm A3'],
            'Danh mục con 1_2' => ['Sản phẩm B1', 'Sản phẩm B2', 'Sản phẩm B3'],
            'Danh mục con 2_1' => ['Sản phẩm C1', 'Sản phẩm C2', 'Sản phẩm C3'],
            'Danh mục con 2_2' => ['Sản phẩm D1', 'Sản phẩm D2', 'Sản phẩm D3'],
            'Danh mục con 3_1' => ['Sản phẩm E1', 'Sản phẩm E2', 'Sản phẩm E3'],
            'Danh mục con 3_2' => ['Sản phẩm F1', 'Sản phẩm F2', 'Sản phẩm F3'],
            'Danh mục con 4_1' => ['Sản phẩm G1', 'Sản phẩm G2', 'Sản phẩm G3'],
            'Danh mục con 4_2' => ['Sản phẩm H1', 'Sản phẩm H2', 'Sản phẩm H3'],
        ];

        foreach ($products as $categoryName => $titles) {
            // if (!isset($subCategories[$categoryName])) {
            //     continue; // Bỏ qua nếu không tìm thấy danh mục con
            // }

            // $categoryId = $subCategories[$categoryName];

            foreach ($titles as $key => $title) {
                $id = DB::table('products')->insertGetId([
                    'title' => $title,
                    'author' => 'Tác giả ' . Str::random(5),
                    'description' => "Mô tả sản phẩm $title",
                    'price' => 300000,
                    'sale_price' => 200000,

                    'isbn' => Str::random(13),
                    'status' => 1,
                    'release_date' => now()->subDays(rand(0, 1000)),
                    'quantity' => rand(5, 100),
                    // 'category_id' => $categoryId,
                    'cover_image' => '/source/images/products/product-img-' . $key + 1 . '.jpg',
                    // 'images' => null,
                    'tags' => null,
                    'views' => rand(100, 10000),
                    'purchases' => rand(0, 500),
                    'language' => 'Tiếng Việt',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                // Cập nhật alias
                DB::table('products')->where('id', $id)->update([
                    'alias' => Str::slug($title . '-' . $id),
                ]);
            }
        }
    }
}

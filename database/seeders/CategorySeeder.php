<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Tạo 8 danh mục cha
        for ($i = 1; $i <= 8; $i++) {
            $category = [
                'name' => "Danh mục cha $i",
                'description' => "Mô tả cho danh mục cha $i",
                'image' => '/source/images/category/category-snack-munchies.jpg',
                'is_featured' => 1,
                'metatitle' => "Danh mục cha $i",
                'metadescription' => "Mô tả chi tiết cho danh mục cha $i",
                'submenus' => []
            ];

            // Thêm 4 danh mục con cho mỗi danh mục cha
            for ($j = 1; $j <= 4; $j++) {
                $category['submenus'][] = [
                    'name' => "Danh mục con {$i}_{$j}",
                    'description' => "Mô tả cho danh mục con {$i}_{$j}"
                ];
            }

            $categories[] = $category;
        }

        foreach ($categories as $category) {
            // Thêm menu cha
            $parentId = DB::table('categorys')->insertGetId([
                'name' => $category['name'],
                'description' => $category['description'],
                'image' => $category['image'],
                'status' => 1,
                'parent_id' => null,
                'is_featured' => $category['is_featured'],
                'metatitle' => $category['metatitle'],
                'metadescription' => $category['metadescription'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Cập nhật alias cho menu cha
            DB::table('categorys')->where('id', $parentId)->update([
                'alias' => Str::slug($category['name'] . '-' . $parentId)
            ]);

            // Thêm các menu con
            if (!empty($category['submenus'])) {
                foreach ($category['submenus'] as $submenu) {
                    $childId = DB::table('categorys')->insertGetId([
                        'name' => $submenu['name'],
                        'description' => $submenu['description'],
                        'image' => $category['image'],
                        'status' => 1,
                        'parent_id' => $parentId,
                        'is_featured' => 1,
                        'metatitle' => $submenu['name'],
                        'metadescription' => $submenu['description'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);

                    DB::table('categorys')->where('id', $childId)->update([
                        'alias' => Str::slug($submenu['name'] . '-' . $childId)
                    ]);
                }
            }
        }
    }
}

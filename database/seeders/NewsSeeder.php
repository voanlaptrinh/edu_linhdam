<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $newsItems = [
            'Tin tức 1',
            'Tin tức 2',
            'Tin tức 3',
            'Tin tức 4',
            'Tin tức 5',
            'Tin tức 6',
            'Tin tức 7',
            'Tin tức 8',
            'Tin tức 9',
        ];

        foreach ($newsItems as $key => $name) {
            $id = DB::table('news')->insertGetId([
                'name' => $name,
                'description' => 'Mô tả ngắn cho ' . $name,
                'content' => '<p>Nội dung chi tiết của ' . $name . '.</p>',
                'alias' => '',
                'tag' => null,
                'image' =>'source/images/blog/blog-img-' . $key+1 . '.jpg',
                'metatitle' => 'Meta title cho ' . $name,
                'metadescription' => 'Meta description cho ' . $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Cập nhật alias có chứa ID
            DB::table('news')->where('id', $id)->update([
                'alias' => Str::slug($name . '-' . $id)
            ]);
        }
        $courseItems = [
            'Tin môn học 1',
            'Tin môn học 2',
            'Tin môn học 3',
            'Tin môn học 4',
            'Tin môn học 5',
            'Tin môn học 6',
            'Tin môn học 7',
            'Tin môn học 8',
            'Tin môn học 9',
        ];

        foreach ($courseItems as $key => $name) {
            $id = DB::table('courses')->insertGetId([
                'name' => $name,
                'description' => 'Mô tả ngắn cho ' . $name,
                'content' => '<p>Nội dung chi tiết của ' . $name . '.</p>',
                'alias' => '',
                'image' =>'',
                'metatitle' => 'Meta title cho ' . $name,
                'metadescription' => 'Meta description cho ' . $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Cập nhật alias có chứa ID
            DB::table('courses')->where('id', $id)->update([
                'alias' => Str::slug($name . '-' . $id)
            ]);
        }
    }
}

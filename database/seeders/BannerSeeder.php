<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'name' => 'SuperMarket For Fresh Grocery',
            'description' => 'Introduced a new model for online grocery shopping and convenient home delivery.',
            'image' => '/source/images/slider/slide-1.jpg'
        ]);
        Banner::create([
            'name' => 'SuperMarket For Fresh Grocery',
            'description' => 'Introduced a new model for online grocery shopping and convenient home delivery.',
            'image' => '/source/images/slider/slider-2.jpg'
        ]);
    }
}

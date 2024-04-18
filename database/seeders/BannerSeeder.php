<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner_images = [
            "banner_demo_1.png",
            "banner_demo_2.png",
        ];
        $description = fake()->realTextBetween(400, 500);
        foreach ($banner_images as $image) {
            Banner::factory()->create([
                'description' => $description,
                'image' => $image,
            ]);
        }
    }
}

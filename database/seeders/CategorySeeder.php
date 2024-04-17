<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["Information Technology", "Varity", "Burmese", "Language Support"];
        // $categories = ["Information Technology", "Varity", "Burmese", "Language Support", "Information Technology2", "Varity2", "Burmese2", "Language Support2", "Information Technology3", "Varity3", "Burmese3", "Language Support3", "Information Technology4", "Varity4", "Burmese4", "Language Support4", "Information Technology5", "Varity5", "Burmese5", "Language Support5", "Information Technology6", "Varity6", "Burmese6", "Language Support6"];
        foreach ($categories as $category) {
            Category::factory()->create([
                "title" => $category,
                "slug" => Str::slug($category)
            ]);
        }
    }
}

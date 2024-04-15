<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Category;
use App\Models\ProjectBook;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'roll_number' => '0',
            'email' => 'admin@gmail.com',
            'phone' => '09779866151',
            'role' => 'admin',
            'profile_picture' => "default_user.svg"
        ]);

        User::factory()->create([
            'name' => 'Mg Mg',
            'roll_number' => 'MUB-3012',
            'email' => 'mgmg@gmail.com',
            'role' => 'student',
            'profile_picture' => "default_user.svg"
        ]);

        Setting::factory()->create([
            'borrowing_duration' => '7',
            'fine_rate' => '1000',
        ]);


        $categories = ["Information Technology", "Varity", "Burmese", "Language Support"];
        // $categories = ["Information Technology", "Varity", "Burmese", "Language Support", "Information Technology2", "Varity2", "Burmese2", "Language Support2", "Information Technology3", "Varity3", "Burmese3", "Language Support3", "Information Technology4", "Varity4", "Burmese4", "Language Support4", "Information Technology5", "Varity5", "Burmese5", "Language Support5", "Information Technology6", "Varity6", "Burmese6", "Language Support6"];
        foreach ($categories as $category) {
            Category::factory()->create([
                "title" => $category,
                "slug" => Str::slug($category)
            ]);
        }

        $images = [
            "demo_1.jpg",
            "demo_2.jpg",
            "demo_3.jpg",
            "demo_4.jpg",
            "demo_5.jpg",
            "demo_6.jpg",
        ];

        Book::factory(100)->create();
        ProjectBook::factory(30)->create();
        foreach ($images as $image) {
            $title = fake()->name();
            $description = fake()->realTextBetween(400, 500);
            Book::factory()->create([
                'title' => $title,
                'slug' => Str::slug($title),
                'description' => $description,
                'excerpt' => Str::excerpt($description),
                'author' => fake()->name(),
                'category_id' => Category::inRandomOrder()->first()->id,
                'qty' => 5,
                'book_image' => $image,
            ]);
        }
    }
}

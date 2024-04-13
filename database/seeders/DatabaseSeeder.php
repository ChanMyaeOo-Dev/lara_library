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
        foreach ($categories as $category) {
            Category::factory()->create([
                "title" => $category,
                "slug" => Str::slug($category)
            ]);
        }

        Book::factory(100)->create();
        ProjectBook::factory(30)->create();
    }
}

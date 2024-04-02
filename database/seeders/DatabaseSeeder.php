<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Category;
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
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'profile_picture' => "default_user.svg"
        ]);

        User::factory()->create([
            'name' => 'Mg Mg',
            'email' => 'mgmg@gmail.com',
            'role' => 'student',
            'profile_picture' => "default_user.svg"
        ]);

        $categories = ["Information Technology", "Varity", "Burmese", "Language Support"];
        foreach ($categories as $category) {
            Category::factory()->create([
                "title" => $category,
                "slug" => Str::slug($category)
            ]);
        }

        Book::factory(30)->create();
    }
}

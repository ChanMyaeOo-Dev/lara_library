<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->name();
        $description = fake()->realTextBetween(400, 500);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $description,
            'excerpt' => Str::excerpt($description),
            'author' => fake()->name(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'qty' => 5,
            'book_image' => "default_book_image.jpg",
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;


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
        $images = [
            "demo_1.jpg",
            "demo_2.jpg",
            "demo_3.jpg",
            "demo_4.jpg",
            "demo_5.jpg",
            "demo_6.jpg",
        ];
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $description,
            'excerpt' => Str::excerpt($description),
            'author' => fake()->name(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'qty' => 5,
            'book_image' => Arr::random($images),
        ];
    }
}

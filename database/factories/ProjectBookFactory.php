<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectBook>
 */
class ProjectBookFactory extends Factory
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
            'category' => "Software Engineering",
            'cover_image' => "default_book_image.jpg",
            'link' => "https://drive.google.com/file/d/1S79M0CN99ykd-pORT-WacKKoUtbshLgj/view?usp=sharing",
        ];
    }
}

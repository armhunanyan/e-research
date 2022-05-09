<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'title' => $this->faker->sentence(mt_rand(3, 5)),
            'author' => $this->faker->sentence(mt_rand(2, 4)),
            'year' => $this->faker->numberBetween(2000, 2020),
            'image' => 'book_covers/'. $this->faker->image('public/storage/book_covers', 640, 480, null, false),
            'link' => 'books/'. $this->faker->image('public/storage/books', 640, 480, null, false)
        ];
    }
}

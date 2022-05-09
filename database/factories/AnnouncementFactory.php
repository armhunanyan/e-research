<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(5, 10)),
            'content' => $this->faker->paragraph(mt_rand(5, 10)),
            'image' => 'announcements/'. $this->faker->image('public/storage/announcements', 640, 480, null, false)
        ];
    }
}

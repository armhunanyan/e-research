<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
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
            'position' => $this->faker->sentence(mt_rand(1, 2)),
            'image' => 'team/'. $this->faker->image('public/storage/team', 640, 480, null, false),
        ];
    }
}

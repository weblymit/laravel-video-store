<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(10),
            'url_img' => "https://source.unsplash.com/random/640×480",
            'nationality' => fake()->country(),
            'year_created' => fake()->year(),
            'actor' => fake()->name(),
            'created_at' => now(),
        ];
    }
}

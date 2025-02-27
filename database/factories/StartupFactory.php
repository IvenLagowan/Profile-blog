<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Startup>
 */
class StartupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'excerpt' => $this->faker->paragraph((mt_rand(5, 8))),
            'slug' => $this->faker->slug(),
            'body' => collect($this->faker->paragraphs(mt_rand(7, 12)))->map(fn ($p) => "<p>$p</p>")->implode(''),
            'user_id' => mt_rand(1,1)
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
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
            'slug' => $this->faker->slug(),
            'jobbrief' => $this->faker->paragraph(),
            'requirements' => collect($this->faker->paragraphs(mt_rand(7, 12)))->map(fn ($p) => "<p>$p</p>")->implode(''),
            'deadline' => $this->faker->sentence(mt_rand(2, 4)),
            'placement' => $this->faker->sentence(mt_rand(2, 4)),
            'user_id' => mt_rand(1,1)
        ];
    }
}

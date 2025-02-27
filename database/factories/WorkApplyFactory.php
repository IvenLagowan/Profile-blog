<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WorkApplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'title' => $this->faker->sentence(mt_rand(2, 8)),
            // 'slug' => $this->faker->slug(),
            // 'jobbrief' => $this->faker->paragraph(),
            // 'requirements' => collect($this->faker->paragraphs(mt_rand(7, 12)))->map(fn ($p) => "<p>$p</p>")->implode(''),
            // 'deadline' => $this->faker->sentence(mt_rand(2, 4)),
            // 'placement' => $this->faker->sentence(mt_rand(2, 4)),

            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'idcard' => $this->faker->paragraph(),
            'name' => $this->faker->paragraph(),
            'gander' => $this->faker->paragraph(),
            'address' => $this->faker->paragraph(),
            'city' => $this->faker->paragraph(),
            'address1' => $this->faker->paragraph(),
            'date' => $this->faker->paragraph(),
            'email' => $this->faker->paragraph(),
            'phone' => $this->faker->paragraph(),
            'education' => $this->faker->paragraph(),
            'school' => $this->faker->paragraph(),
            'major' => $this->faker->paragraph(),
            'gpa' => $this->faker->paragraph(),
            'graduation' => $this->faker->paragraph(),
            'course1' => $this->faker->paragraph(),
            'course2' => $this->faker->paragraph(),
            'course3' => $this->faker->paragraph(),
            'experience1' => $this->faker->paragraph(),
            'experience2' => $this->faker->paragraph(),
            'experience3' => $this->faker->paragraph(),
            'cv' => 'required|mimes:pdf|max:5024',
            'image' => 'image|file|max:5000'
        ];
    }
}

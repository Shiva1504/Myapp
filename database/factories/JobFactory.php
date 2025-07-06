<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(), // Assuming you have an Employer factory
            'company' => fake()->company(),
            'salary' => fake()->numberBetween(6, 20) . ' LPA',

            // 'location' => fake()->city(),
            // 'description' => fake()->paragraph(3),
            // 'posted_at' => now(),
        ];
    }
}

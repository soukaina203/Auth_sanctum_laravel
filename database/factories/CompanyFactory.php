<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => fake()->name(),
            'descriptionDActivite' => fake()->name(),
            'phoneNumber' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail,
            'otherContact' => fake()->name(),
            'address' => fake()->name(),
            'secteur' => fake()->name(),
            'nameOfCEO' => fake()->name(),
        ];
    }
}

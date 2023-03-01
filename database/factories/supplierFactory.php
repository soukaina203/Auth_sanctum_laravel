<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\supplier>
 */
class supplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'FullName' => fake()->name(),
            'phoneNumber' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail,
            'Localisation'=>fake()->name(),
            'fonction'=>fake()->name(),
            'otherContact'=>fake()->name(),
            'rating'=>fake()->numberBetween(0, 10),
        ];
    }
}

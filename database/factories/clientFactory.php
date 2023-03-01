<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\client>
 */
class clientFactory extends Factory
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
                'otherContact'=>fake()->name(),
                'fidalite'=>fake()->name(),

        ];

    }
}

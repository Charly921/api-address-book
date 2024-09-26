<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'street' => fake()->sentence(2, true),
            'colony' => fake()->sentence(2, true),
            'number' => rand(1, 9999),
            'city' => fake()->sentence(1, true),
        ];
    }
}

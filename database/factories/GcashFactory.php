<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gcash>
 */
class GcashFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => $this->faker->numberBetween(1, 999),
            'number' => $this->faker->numberBetween(10000000000, 99999999999),
            'reference' => $this->faker->numberBetween(1000, 9999)
        ];
    }
}

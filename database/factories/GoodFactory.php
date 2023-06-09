<?php

namespace Database\Factories;

use App\Models\Good;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Good>
 */
class GoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word,
            'price' => fake()->numberBetween(100, 999),
            'description' => fake()->text,
        ];
    }
}

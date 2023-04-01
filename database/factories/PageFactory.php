<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory<Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->unique()->words(asText: true);
        $code = Str::slug($title);

        return [
            'code' => $code,
            'title' => $title,
            'description' => fake()->text,
            'published' => fake()->boolean,
        ];
    }
}

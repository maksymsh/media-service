<?php

namespace Database\Seeders;

use App\Models\Good;
use Illuminate\Database\Seeder;

class GoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Good::truncate();

        Good::factory(10)->create()->each(function ($category) {
            $image = fake()->imageUrl;
            $category->addMediaFromUrl($image)->toMediaCollection('image');
        });
    }
}

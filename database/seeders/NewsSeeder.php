<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::truncate();

        News::factory(10)->create()->each(function ($category) {
            $image = fake()->image;
            $category->addMedia($image)->toMediaCollection('image');
        });
    }
}

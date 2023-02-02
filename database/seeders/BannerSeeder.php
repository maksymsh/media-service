<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::truncate();

        Banner::factory(10)->create()->each(function ($category) {
            $image = fake()->image;
            $category->addMedia($image)->toMediaCollection('image');
        });
    }
}

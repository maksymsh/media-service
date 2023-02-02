<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::truncate();

        Service::factory(10)->create()->each(function ($category) {
            $image = fake()->imageUrl;
            $category->addMediaFromUrl($image)->toMediaCollection('image');
        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Study;
use Illuminate\Database\Seeder;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Study::truncate();

        Study::factory(10)->create()->each(function ($category) {
            $image = fake()->imageUrl;
            $category->addMediaFromUrl($image)->toMediaCollection('image');
        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Vacancy;
use Illuminate\Database\Seeder;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vacancy::truncate();

        Vacancy::factory(10)->create()->each(function ($category) {
            $image = fake()->image;
            $category->addMedia($image)->toMediaCollection('image');
        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::truncate();

        Project::factory(10)->create()->each(function ($category) {
            $image = fake()->image;
            $category->addMedia($image)->toMediaCollection('image');
        });
    }
}

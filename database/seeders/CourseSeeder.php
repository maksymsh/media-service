<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::truncate();

        Course::factory(10)->create()->each(function ($course) {
//            $course->addMedia(fake()->image)->toMediaCollection('image');
        });
    }
}

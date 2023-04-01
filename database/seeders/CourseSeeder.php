<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Офлайн, м.Львів вул.Наукова, 7а (3-й поверх)',
                'name' => 'Курс «Використання прикладного рішення "Бухгалтерія"»',
                'description' => '12 занять по 2 год. / 3 600 грн',
                'image' => 'study1.jpg',
            ],
            [
                'title' => 'Тестування Онлайн',
                'name' => 'Тестування “Професіонал”',
                'description' => 'Вартість тестування 360 грн',
                'image' => 'study2.jpg',
            ],
        ];

        foreach ($data as $item) {
            $attrs['name'] = $item['name'];
            $attrs['description'] = $item['description'];
            $attrs['seo_title'] = $item['name'];
            $attrs['seo_description'] = $item['name'];
            $attrs['seo_keywords'] = $item['name'];
            $course = Course::factory()->create($attrs);
            File::copy(public_path('images/'.$item['image']), resource_path('images/'.$item['image']));
            $course->addMedia(resource_path('images/'.$item['image']))->toMediaCollection('image');
        }
    }
}

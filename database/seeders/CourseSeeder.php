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
                'description_short' => 'Курс розроблений методистами Спілки Автоматизаторів Бізнесу та розрахований на фахівців, що володіють базовими знаннями бухгалтерського та податкового обліку.',
                'content' => '<p><ul class="ul-custom-2"><li>Старт системи</li><li>Облік запасівv</li><li>Облік взаєморозрахунків з контрагентами</li><li>Облік операцій з грошовими коштами та розрахунків з підзвітними особами</li><li>Облік ПДВ</li><li>Облік кадрів та розрахунок заробітної плати</li><li>Облік необоротних активів та малоцінних швидкозношуваних предметів </li><li>Облік отримання та надання послуг </li><li>Закриття періоду </li><li>Облік виробничої діяльності</li><li>Облік операцій в іноземній валюті</li><li>Облік операцій в іноземній валюті</li><li>Звіти для керівника підприємства</li></ul></p>',
                'image' => 'study1.jpg',
            ],
            [
                'title' => 'Тестування Онлайн',
                'name' => 'Тестування “Професіонал”',
                'description' => 'Вартість тестування 360 грн',
                'description_short' => 'Курс розроблений методистами Спілки Автоматизаторів Бізнесу та розрахований на фахівців, що володіють базовими знаннями бухгалтерського та податкового обліку.',
                'content' => '<p><ul class="ul-custom-2"><li>Старт системи</li><li>Облік запасівv</li><li>Облік взаєморозрахунків з контрагентами</li><li>Облік операцій з грошовими коштами та розрахунків з підзвітними особами</li><li>Облік ПДВ</li><li>Облік кадрів та розрахунок заробітної плати</li><li>Облік необоротних активів та малоцінних швидкозношуваних предметів </li><li>Облік отримання та надання послуг </li><li>Закриття періоду </li><li>Облік виробничої діяльності</li><li>Облік операцій в іноземній валюті</li><li>Облік операцій в іноземній валюті</li><li>Звіти для керівника підприємства</li></ul></p>',
                'image' => 'study2.jpg',
            ],
        ];

        foreach ($data as $item) {
            $attrs['title'] = $item['title'];
            $attrs['name'] = $item['name'];
            $attrs['description_short'] = $item['description'];
            $attrs['description'] = $item['description'];
            $attrs['content'] = $item['content'];
            $attrs['seo_title'] = $item['name'];
            $attrs['seo_description'] = $item['name'];
            $attrs['seo_keywords'] = $item['name'];
            $course = Course::query()->create($attrs);
            File::copy(public_path('images/'.$item['image']), resource_path('images/'.$item['image']));
            $course->addMedia(resource_path('images/'.$item['image']))->toMediaCollection('image');
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
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
                'code' => 'home',
                'title' => 'Aвтоматизація компаній та підприємств Service',
                'description' => 'Ми допомагаємо клієнтам максимально оптимізувати роботу підприємства та ефективно управляти бізнесом',
            ],
            [
                'code' => 'about',
                'title' => 'Компанія Mediaservice',
                'description' => '«Ми - команда спеціалістів зі спільним бажанням - допомогти клієнтам максимально оптимізувати роботу підприємства та ефективно управляти бізнесом.',
            ],
            [
                'code' => 'contacts',
                'title' => 'Контакти',
                'description' => '',
            ],
            [
                'code' => 'news',
                'title' => 'Новини компанії',
                'description' => '',
            ],
            [
                'code' => 'products',
                'title' => 'Реєстратори розрахункових операцій',
                'description' => 'Реєстратори розрахункових операцій',
            ],
            [
                'code' => 'goods',
                'title' => 'Автоматизуємо ваш бізнес',
                'description' => 'Автоматизуємо ваш бізнес',
            ],
            [
                'code' => 'services',
                'title' => 'Допомагаємо бізнесу функціонувати ефективно',
                'description' => 'Допомагаємо бізнесу функціонувати ефективно',
            ],
            [
                'code' => 'projects',
                'title' => 'Реалізовані проекти компанії Mediaservice',
                'description' => 'Реалізовані проекти компанії Mediaservice',
            ],
            [
                'code' => 'vacancies',
                'title' => 'Вікансії',
                'description' => 'Вікансії',
            ],
            [
                'code' => 'study',
                'title' => 'Навчання',
                'description' => 'Навчання',
            ],
            [
                'code' => 'videos',
                'title' => 'Навчальні відео',
                'description' => 'Навчальні відео',
            ],
        ];

        foreach ($data as $item) {
            $attrs['code'] = $item['code'];
            $attrs['title'] = $item['title'];
            $attrs['description'] = $item['description'];
            $attrs['seo_title'] = $item['title'];
            $attrs['seo_description'] = $item['title'];
            $attrs['seo_keywords'] = $item['title'];
            $page = Page::factory()->create($attrs);
        }
    }
}

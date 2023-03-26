<?php

namespace Database\Seeders;

use App\Models\Layout;
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
        $layouts = Layout::query()->get();

        $uniqueKeys = ['code'];

        $data = [
            Page::factory()->make([
                'code' => 'home',
                'title' => '<span>Aвтоматизація</span> <br>компаній <br>та підприємств Service',
                'seo_title' => 'Aвтоматизація компаній та підприємств Service',
                'seo_description' => 'Aвтоматизація компаній та підприємств Service',
                'seo_keywords' => 'Aвтоматизація компаній та підприємств Service',
                'text' => 'Ми допомагаємо клієнтам максимально оптимізувати роботу підприємства та ефективно управляти бізнесом',
            ]),
            Page::factory()->make([
                'code' => 'about',
                'title' => 'Компанія <br/>Mediaservice',
                'seo_title' => '',
                'seo_description' => '',
                'seo_keywords' => '',
                'text' => '«Ми - команда спеціалістів зі спільним бажанням - допомогти клієнтам максимально оптимізувати роботу підприємства та ефективно управляти бізнесом.',
            ]),
            Page::factory()->make([
                'code' => 'contacts',
                'title' => 'Контакти',
                'seo_title' => 'Контакти',
                'seo_description' => 'Контакти',
                'seo_keywords' => 'Контакти',
                'text' => '',
            ]),

            //
            Page::factory()->make([
                'code' => 'news',
                'title' => 'Новини компанії',
                'seo_title' => 'Новини компанії',
                'seo_description' => 'Новини компанії',
                'seo_keywords' => 'Новини компанії',
                'text' => '',
            ]),
            Page::factory()->make([
                'code' => 'news-categories',
                'title' => 'News Categories',
                'seo_title' => 'News Categories',
                'seo_description' => 'News Categories',
                'seo_keywords' => 'News Categories',
                'text' => '',
            ]),

            //
            Page::factory()->make([
                'code' => 'products',
                'title' => 'Реєстратори розрахункових операцій',
                'seo_title' => 'Реєстратори розрахункових операцій',
                'seo_description' => 'Реєстратори розрахункових операцій',
                'seo_keywords' => 'Реєстратори розрахункових операцій',
                'text' => 'Реєстратори розрахункових операцій',
            ]),
            Page::factory()->make([
                'code' => 'product-categories',
                'title' => 'Product Categories',
                'seo_title' => 'Product Categories',
                'seo_description' => 'Product Categories',
                'seo_keywords' => 'Product Categories',
                'text' => 'Product Categories',
            ]),

            //
            Page::factory()->make([
                'code' => 'goods',
                'title' => 'Автоматизуємо ваш бізнес',
                'seo_title' => 'Автоматизуємо ваш бізнес',
                'seo_description' => 'Автоматизуємо ваш бізнес',
                'seo_keywords' => 'Автоматизуємо ваш бізнес',
                'text' => 'Автоматизуємо ваш бізнес',
            ]),
            Page::factory()->make([
                'code' => 'good-categories',
                'title' => 'Good Categories',
                'seo_title' => 'Good Categories',
                'seo_description' => 'Good Categories',
                'seo_keywords' => 'Good Categories',
                'text' => 'Good Categories',
            ]),

            //
            Page::factory()->make([
                'code' => 'services',
                'title' => 'Допомагаємо бізнесу функціонувати ефективно',
                'seo_title' => 'Допомагаємо бізнесу функціонувати ефективно',
                'seo_description' => 'Допомагаємо бізнесу функціонувати ефективно',
                'seo_keywords' => 'Допомагаємо бізнесу функціонувати ефективно',
                'text' => 'Допомагаємо бізнесу функціонувати ефективно',
            ]),
            Page::factory()->make([
                'code' => 'service-categories',
                'title' => 'Service Categories',
                'seo_title' => 'Service Categories',
                'seo_description' => 'Service Categories',
                'seo_keywords' => 'Service Categories',
                'text' => 'Service Categories',
            ]),

            //
            Page::factory()->make([
                'code' => 'projects',
                'title' => 'Реалізовані проекти компанії Mediaservice',
                'seo_title' => 'Реалізовані проекти компанії Mediaservice',
                'seo_description' => 'Реалізовані проекти компанії Mediaservice',
                'seo_keywords' => 'Реалізовані проекти компанії Mediaservice',
                'text' => 'Реалізовані проекти компанії Mediaservice',
            ]),
            Page::factory()->make([
                'code' => 'project-categories',
                'title' => 'Реалізовані проекти компанії Mediaservice',
                'seo_title' => 'Реалізовані проекти компанії Mediaservice',
                'seo_description' => 'Реалізовані проекти компанії Mediaservice',
                'seo_keywords' => 'Реалізовані проекти компанії Mediaservice',
                'text' => 'Реалізовані проекти компанії Mediaservice',
            ]),

            //
            Page::factory()->make([
                'code' => 'vacancies',
                'title' => 'Вікансії',
                'seo_title' => 'Вікансії',
                'seo_description' => 'Вікансії',
                'seo_keywords' => 'Вікансії',
                'text' => 'Вікансії',
            ]),

            //
            Page::factory()->make([
                'code' => 'studies',
                'title' => 'Навчання',
                'seo_title' => 'Навчання',
                'seo_description' => 'Навчання',
                'seo_keywords' => 'Навчання',
                'text' => 'Навчання',
            ]),
            Page::factory()->make([
                'code' => 'courses',
                'title' => 'Курси',
                'seo_title' => 'Курси',
                'seo_description' => 'Курси',
                'seo_keywords' => 'Курси',
                'text' => 'Курси',
            ]),

            //
            Page::factory()->make([
                'code' => 'account',
                'title' => 'Особистий кабінет',
                'seo_title' => 'Особистий кабінет',
                'seo_description' => 'Особистий кабінет',
                'seo_keywords' => 'Особистий кабінет',
                'text' => 'Особистий кабінет',
            ]),
        ];

        foreach ($data as $item) {
            Page::query()->firstOrCreate($item->only($uniqueKeys), $item->getAttributes());
        }
    }
}

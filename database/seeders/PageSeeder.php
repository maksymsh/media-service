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
                'text' => 'Ми допомагаємо клієнтам максимально оптимізувати роботу підприємства та ефективно управляти бізнесом',
                'layout_id' => $layouts->where('slug', 'home-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'about',
                'title' => 'Компанія <br/>Mediaservice',
                'text' => '«Ми - команда спеціалістів зі спільним бажанням - допомогти клієнтам максимально оптимізувати роботу підприємства та ефективно управляти бізнесом.',
                'layout_id' => $layouts->where('slug', 'page-about')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'contacts',
                'title' => 'Контакти',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'page-contacts')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'news',
                'title' => 'Новини компанії',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'news-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'news-categories',
                'title' => 'News Categories',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'news-categories')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'news-category',
                'title' => 'News Category',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'news-category')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'news-post',
                'title' => 'News post',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'news-post')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'products',
                'title' => 'Реєстратори розрахункових операцій',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'product-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'product-categories',
                'title' => 'Product Categories',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'product-categories')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'product-category',
                'title' => 'Product Category',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'product-category')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'product-page',
                'title' => 'Product page',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'product-page')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'goods',
                'title' => 'Автоматизуємо ваш бізнес',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'good-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'good-categories',
                'title' => 'Good Categories',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'good-categories')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'good-category',
                'title' => 'Good Category',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'good-category')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'good-page',
                'title' => 'Good page',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'good-page')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'services',
                'title' => 'Допомагаємо бізнесу функціонувати ефективно',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'service-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'service-categories',
                'title' => 'Service Categories',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'service-categories')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'service-category',
                'title' => 'Service Category',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'service-category')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'service-page',
                'title' => 'Service page',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'service-page')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'projects',
                'title' => 'Реалізовані проекти компанії Mediaservice',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'project-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'project-page',
                'title' => 'Project page',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'project-page')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'vacancies',
                'title' => 'Vacancies',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'vacancy-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'vacancy-page',
                'title' => 'Vacancy page',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'vacancy-page')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'studies',
                'title' => 'Studies',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'study-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'study-page',
                'title' => 'Study page',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'study-page')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'order',
                'title' => 'Order',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'order-index')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'account',
                'title' => 'Account',
                'text' => '',
                'layout_id' => $layouts->where('slug', 'account-index')->first()?->id,
            ]),
        ];

        foreach ($data as $item) {
            $page = Page::query()->firstOrCreate($item->only($uniqueKeys), $item->getAttributes());

            if ($page->wasRecentlyCreated) {
//                $image = fake()->image;
//                $page->addMedia($image)->toMediaCollection('image');
            }
        }
    }
}

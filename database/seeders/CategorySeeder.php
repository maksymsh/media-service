<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Good;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->runServiceCategories();
        $this->runProductCategories();
        $this->runGoodCategories();
    }

    public function runServiceCategories()
    {
        $data = [
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/icon1.svg')))->toMediaCollection('image'))->make([
                'type' => Service::class,
                'name' => 'BAS',
                'top' => true,
                'description' => '<div class="col-anons">
                                            Програмні рішення для створення комплексних систем автоматизації бізнесу
                                        </div>
                                        <ul class="ul-col">
                                            <li>Комплексна автоматизація</li>
                                            <li>Встановлення та налаштування</li>
                                            <li>Інформаційно-технічний супровід</li>
                                            <li>Оренда програмних продуктів</li>
                                        </ul>',
                'description_short' => '<div class="col-anons">
                                            Програмні рішення для створення комплексних систем автоматизації бізнесу
                                        </div>
                                        <ul class="ul-col">
                                            <li>Комплексна автоматизація</li>
                                            <li>Встановлення та налаштування</li>
                                            <li>Інформаційно-технічний супровід</li>
                                            <li>Оренда програмних продуктів</li>
                                        </ul>',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/icon4.svg')))->toMediaCollection('image'))->make([
                'type' => Service::class,
                'name' => 'Обслуговування <br/>сервісів та мереж',
                'top' => true,
                'description' => '<div class="col-anons">
                                            Надійна локальна мережа та телефонія є фундаментом вашої безперебійної роботи бізнесу
                                        </div>',
                'description_short' => '<div class="col-anons">
                                            Надійна локальна мережа та телефонія є фундаментом вашої безперебійної роботи бізнесу
                                        </div>',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/icon2.svg')))->toMediaCollection('image'))->make([
                'type' => Service::class,
                'name' => 'Розробка мобільних додатків',
                'top' => true,
                'description' => '<div class="col-anons">
                                            Команда професіоналів розробить сайт або додаток під ваші потреби
                                        </div>',
                'description_short' => '<div class="col-anons">
                                            Команда професіоналів розробить сайт або додаток під ваші потреби
                                        </div>',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/icon5.svg')))->toMediaCollection('image'))->make([
                'type' => Service::class,
                'name' => 'Обслуговування <br/>РРО/ПРРО',
                'top' => true,
                'description' => '<div class="col-anons">
                                            Допоможемо на етапі підбору, впровадження та подальшого обслуговування
                                        </div>',
                'description_short' => '<div class="col-anons">
                                            Допоможемо на етапі підбору, впровадження та подальшого обслуговування
                                        </div>',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/icon3.svg')))->toMediaCollection('image'))->make([
                'type' => Service::class,
                'name' => 'Впровадження CRM та Корпоративних порталів',
                'top' => true,
                'description' => '<div class="col-anons">
                                            Команда професіоналів розробить сайт або додаток під ваші потреби
                                        </div>
                                        <ul class="ul-col">
                                            <li>Розробка сайтів та їх інтеграція</li>
                                            <li>Впровадження CRM</li>
                                        </ul>',
                'description_short' => '<div class="col-anons">
                                            Команда професіоналів розробить сайт або додаток під ваші потреби
                                        </div>
                                        <ul class="ul-col">
                                            <li>Розробка сайтів та їх інтеграція</li>
                                            <li>Впровадження CRM</li>
                                        </ul>',
            ]),
        ];

        foreach ($data as $item) {
            Category::query()->firstOrCreate($item->only(['name', 'type']), $item->getAttributes());
        }
    }

    public function runProductCategories()
    {
        $data = [
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/icon6.svg')))->toMediaCollection('image'))->make([
                'type' => Product::class,
                'name' => 'BAS',
                'top' => true,
                'description' => '<div class="col-anons">
                                            Програмний продукт призначений для автоматизації бізнес-процесів роздрібних торгових точок
                                        </div>',
                'description_short' => '<div class="col-anons">
                                            Програмний продукт призначений для автоматизації бізнес-процесів роздрібних торгових точок
                                        </div>',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/icon9.svg')))->toMediaCollection('image'))->make([
                'type' => Product::class,
                'name' => 'PROСкануй',
                'top' => true,
                'description' => '<div class="col-anons">
                                            Програмні рішення для створення комплексних систем автоматизації бізнесу
                                        </div>',
                'description_short' => '<div class="col-anons">
                                            Програмні рішення для створення комплексних систем автоматизації бізнесу
                                        </div>',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/icon7.svg')))->toMediaCollection('image'))->make([
                'type' => Product::class,
                'name' => 'PROДавай',
                'top' => true,
                'description' => '<div class="col-anons">
                                            П\'ять великих інструментів, які допомагають бізнесу ефективно працювати
                                        </div>',
                'description_short' => '<div class="col-anons">
                                            П\'ять великих інструментів, які допомагають бізнесу ефективно працювати
                                        </div>',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/icon10.svg')))->toMediaCollection('image'))->make([
                'type' => Product::class,
                'name' => 'Dilosoft',
                'top' => true,
                'description' => '<div class="col-anons">
                                            Галузеве рішення призначене для роботи зі специфічним асортиментом
                                        </div>',
                'description_short' => '<div class="col-anons">
                                            Галузеве рішення призначене для роботи зі специфічним асортиментом
                                        </div>',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/icon8.svg')))->toMediaCollection('image'))->make([
                'type' => Product::class,
                'name' => 'CRM-системи',
                'top' => true,
                'description' => '<div class="col-anons">
                                            П\'ять великих інструментів, які допомагають бізнесу ефективно працювати
                                        </div>',
                'description_short' => '<div class="col-anons">
                                            П\'ять великих інструментів, які допомагають бізнесу ефективно працювати
                                        </div>',
            ]),
        ];

        foreach ($data as $item) {
            Category::query()->firstOrCreate($item->only(['name', 'type']), $item->getAttributes());
        }
    }

    public function runGoodCategories()
    {
        $data = [
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/g1.png')))->toMediaCollection('image'))->make([
                'type' => Good::class,
                'name' => 'POS-термінали',
                'top' => true,
                'description' => '',
                'description_short' => '',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/g2.png')))->toMediaCollection('image'))->make([
                'type' => Good::class,
                'name' => 'Сканери',
                'top' => true,
                'description' => '',
                'description_short' => '',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/g3.png')))->toMediaCollection('image'))->make([
                'type' => Good::class,
                'name' => 'Принтери чеків',
                'top' => true,
                'description' => '',
                'description_short' => '',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/g4.png')))->toMediaCollection('image'))->make([
                'type' => Good::class,
                'name' => 'Грошові скрині',
                'top' => true,
                'description' => '',
                'description_short' => '',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/g5.png')))->toMediaCollection('image'))->make([
                'type' => Good::class,
                'name' => 'Реєстратори розрахункових операцій',
                'top' => true,
                'description' => '',
                'description_short' => '',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/g6.png')))->toMediaCollection('image'))->make([
                'type' => Good::class,
                'name' => 'Ваги',
                'top' => true,
                'description' => '',
                'description_short' => '',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/g7.png')))->toMediaCollection('image'))->make([
                'type' => Good::class,
                'name' => 'Термінали збору данних',
                'top' => true,
                'description' => '',
                'description_short' => '',
            ]),
            Category::factory()->afterCreating(fn (Category $category) => $category->addMedia(File::get(public_path('images/g8.png')))->toMediaCollection('image'))->make([
                'type' => Good::class,
                'name' => 'Витратні матеріали',
                'top' => true,
                'description' => '',
                'description_short' => '',
            ]),
        ];

        foreach ($data as $item) {
            Category::query()->firstOrCreate($item->only(['name', 'type']), $item->getAttributes());
        }
    }
}

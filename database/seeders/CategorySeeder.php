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
        Category::truncate();

        $this->runServiceCategories();
        $this->runProductCategories();
        $this->runGoodCategories();
    }

    public function runServiceCategories()
    {
        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/icon1.svg'), resource_path('images/icon1.svg'));
            $category->addMedia(resource_path('images/icon1.svg'))->toMediaCollection('image');
        })->create([
            'type' => Service::class,
            'name' => 'BAS',
            'seo_title' => 'BAS',
            'seo_description' => 'BAS',
            'seo_keywords' => 'BAS',
            'slug' => 'bas-service',
            'top' => true,
            'description' => '<p>
    <div class="col-anons">
        Програмні рішення для створення комплексних систем автоматизації бізнесу
    </div>
    <ul class="ul-col">
        <li>Комплексна автоматизація</li>
        <li>Встановлення та налаштування</li>
        <li>Інформаційно-технічний супровід</li>
        <li>Оренда програмних продуктів</li>
    </ul>
</p>
',
            'description_short' => '<p>
    <div class="col-anons">
        Програмні рішення для створення комплексних систем автоматизації бізнесу
    </div>
    <ul class="ul-col">
        <li>Комплексна автоматизація</li>
        <li>Встановлення та налаштування</li>
        <li>Інформаційно-технічний супровід</li>
        <li>Оренда програмних продуктів</li>
    </ul>
</p>
',
        ]);

        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/icon4.svg'), resource_path('images/icon4.svg'));
            $category->addMedia(resource_path('images/icon4.svg'))->toMediaCollection('image');
        })->create([
            'type' => Service::class,
            'name' => 'Обслуговування <br/>сервісів та мереж',
            'seo_title' => 'Обслуговування сервісів та мереж',
            'seo_description' => 'Обслуговування сервісів та мереж',
            'seo_keywords' => 'Обслуговування сервісів та мереж',
            'top' => true,
            'description' => '<p>
    <div class="col-anons">
        Надійна локальна мережа та телефонія є фундаментом вашої безперебійної роботи бізнесу
    </div>
</p>
',
            'description_short' => '<p>
    <div class="col-anons">
        Надійна локальна мережа та телефонія є фундаментом вашої безперебійної роботи бізнесу
    </div>
</p>
',
        ]);

        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/icon2.svg'), resource_path('images/icon2.svg'));
            $category->addMedia(resource_path('images/icon2.svg'))->toMediaCollection('image');
        })->create([
            'type' => Service::class,
            'name' => 'Розробка мобільних додатків',
            'seo_title' => 'Розробка мобільних додатків',
            'seo_description' => 'Розробка мобільних додатків',
            'seo_keywords' => 'Розробка мобільних додатків',
            'top' => true,
            'description' => '<p>
    <div class="col-anons">
        Команда професіоналів розробить сайт або додаток під ваші потреби
    </div>
</p>
',
            'description_short' => '<p>
    <div class="col-anons">
        Команда професіоналів розробить сайт або додаток під ваші потреби
    </div>
</p>
',
        ]);

        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/icon5.svg'), resource_path('images/icon5.svg'));
            $category->addMedia(resource_path('images/icon5.svg'))->toMediaCollection('image');
        })->create([
            'type' => Service::class,
            'name' => 'Обслуговування <br/>РРО/ПРРО',
            'seo_title' => 'Обслуговування РРО/ПРРО',
            'seo_description' => 'Обслуговування РРО/ПРРО',
            'seo_keywords' => 'Обслуговування РРО/ПРРО',
            'top' => true,
            'description' => '<p>
    <div class="col-anons">
        Допоможемо на етапі підбору, впровадження та подальшого обслуговування
    </div>
</p>
',
            'description_short' => '<p>
    <div class="col-anons">
        Допоможемо на етапі підбору, впровадження та подальшого обслуговування
    </div>
</p>
',
        ]);

        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/icon3.svg'), resource_path('images/icon3.svg'));
            $category->addMedia(resource_path('images/icon3.svg'))->toMediaCollection('image');
        })->create([
            'type' => Service::class,
            'name' => 'Впровадження CRM та Корпоративних порталів',
            'seo_title' => 'Впровадження CRM та Корпоративних порталів',
            'seo_description' => 'Впровадження CRM та Корпоративних порталів',
            'seo_keywords' => 'Впровадження CRM та Корпоративних порталів',
            'top' => true,
            'description' => '<p>
    <div class="col-anons">
        Команда професіоналів розробить сайт або додаток під ваші потреби
    </div>
    <ul class="ul-col">
        <li>Розробка сайтів та їх інтеграція</li>
        <li>Впровадження CRM</li>
    </ul>
</p>
',
            'description_short' => '<p>
    <div class="col-anons">
        Команда професіоналів розробить сайт або додаток під ваші потреби
    </div>
    <ul class="ul-col">
        <li>Розробка сайтів та їх інтеграція</li>
        <li>Впровадження CRM</li>
    </ul>
</p>
',
        ]);
    }

    public function runProductCategories()
    {
        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/icon6.svg'), resource_path('images/icon6.svg'));
            $category->addMedia(resource_path('images/icon6.svg'))->toMediaCollection('image');
        })->create([
            'type' => Product::class,
            'name' => 'BAS',
            'seo_title' => 'BAS',
            'seo_description' => 'BAS',
            'seo_keywords' => 'BAS',
            'slug' => 'bas-products',
            'top' => true,
            'description' => '<p>
    <div class="col-anons">
        Програмний продукт призначений для автоматизації бізнес-процесів роздрібних торгових точок
    </div>
</p>',
            'description_short' => '<p>
    <div class="col-anons">
        Програмний продукт призначений для автоматизації бізнес-процесів роздрібних торгових точок
    </div>
</p>',
        ]);
        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/icon9.svg'), resource_path('images/icon9.svg'));
            $category->addMedia(resource_path('images/icon9.svg'))->toMediaCollection('image');
        })->create([
            'type' => Product::class,
            'name' => 'PROСкануй',
            'seo_title' => 'PROСкануй',
            'seo_description' => 'PROСкануй',
            'seo_keywords' => 'PROСкануй',
            'top' => true,
            'description' => '<p>
    <div class="col-anons">
        Програмні рішення для створення комплексних систем автоматизації бізнесу
    </div>
</p>',
            'description_short' => '<p>
    <div class="col-anons">
        Програмні рішення для створення комплексних систем автоматизації бізнесу
    </div>
</p>',
        ]);
        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/icon7.svg'), resource_path('images/icon7.svg'));
            $category->addMedia(resource_path('images/icon7.svg'))->toMediaCollection('image');
        })->create([
            'type' => Product::class,
            'name' => 'PROДавай',
            'seo_title' => 'PROДавай',
            'seo_description' => 'PROДавай',
            'seo_keywords' => 'PROДавай',
            'top' => true,
            'description' => '<p>
    <div class="col-anons">
        П\'ять великих інструментів, які допомагають бізнесу ефективно працювати
    </div>
</p>',
            'description_short' => '<p>
    <div class="col-anons">
        П\'ять великих інструментів, які допомагають бізнесу ефективно працювати
    </div>
</p>',
        ]);
        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/icon10.svg'), resource_path('images/icon10.svg'));
            $category->addMedia(resource_path('images/icon10.svg'))->toMediaCollection('image');
        })->create([
            'type' => Product::class,
            'name' => 'Dilosoft',
            'seo_title' => 'Dilosoft',
            'seo_description' => 'Dilosoft',
            'seo_keywords' => 'Dilosoft',
            'top' => true,
            'description' => '<p>
    <div class="col-anons">
        Галузеве рішення призначене для роботи зі специфічним асортиментом
    </div>
</p>',
            'description_short' => '<p>
    <div class="col-anons">
        Галузеве рішення призначене для роботи зі специфічним асортиментом
    </div>
</p>',
        ]);
        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/icon8.svg'), resource_path('images/icon8.svg'));
            $category->addMedia(resource_path('images/icon8.svg'))->toMediaCollection('image');
        })->create([
            'type' => Product::class,
            'name' => 'CRM-системи',
            'seo_title' => 'CRM-системи',
            'seo_description' => 'CRM-системи',
            'seo_keywords' => 'CRM-системи',
            'top' => true,
            'description' => '<p>
    <div class="col-anons">
        П\'ять великих інструментів, які допомагають бізнесу ефективно працювати
    </div>
</p>',
            'description_short' => '<p>
    <div class="col-anons">
        П\'ять великих інструментів, які допомагають бізнесу ефективно працювати
    </div>
</p>',
        ]);
    }

    public function runGoodCategories()
    {
        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/g1.png'), resource_path('images/g1.png'));
            $category->addMedia(resource_path('images/g1.png'))->toMediaCollection('image');
        })->create([
            'type' => Good::class,
            'name' => 'POS-термінали',
            'seo_title' => 'POS-термінали',
            'seo_description' => 'POS-термінали',
            'seo_keywords' => 'POS-термінали',
            'top' => true,
            'description' => '',
            'description_short' => '',
        ]);
        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/g2.png'), resource_path('images/g2.png'));
            $category->addMedia(resource_path('images/g2.png'))->toMediaCollection('image');
        })->create([
            'type' => Good::class,
            'name' => 'Сканери',
            'seo_title' => 'Сканери',
            'seo_description' => 'Сканери',
            'seo_keywords' => 'Сканери',
            'top' => true,
            'description' => '',
            'description_short' => '',
        ]);
        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/g3.png'), resource_path('images/g3.png'));
            $category->addMedia(resource_path('images/g3.png'))->toMediaCollection('image');
        })->create([
            'type' => Good::class,
            'name' => 'Принтери чеків',
            'seo_title' => 'Принтери чеків',
            'seo_description' => 'Принтери чеків',
            'seo_keywords' => 'Принтери чеків',
            'top' => true,
            'description' => '',
            'description_short' => '',
        ]);
        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/g4.png'), resource_path('images/g4.png'));
            $category->addMedia(resource_path('images/g4.png'))->toMediaCollection('image');
        })->create([
            'type' => Good::class,
            'name' => 'Грошові скрині',
            'seo_title' => 'Грошові скрині',
            'seo_description' => 'Грошові скрині',
            'seo_keywords' => 'Грошові скрині',
            'top' => true,
            'description' => '',
            'description_short' => '',
        ]);
        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/g5.png'), resource_path('images/g5.png'));
            $category->addMedia(resource_path('images/g5.png'))->toMediaCollection('image');
        })->create([
            'type' => Good::class,
            'name' => 'Реєстратори розрахункових операцій',
            'seo_title' => 'Реєстратори розрахункових операцій',
            'seo_description' => 'Реєстратори розрахункових операцій',
            'seo_keywords' => 'Реєстратори розрахункових операцій',
            'top' => true,
            'description' => '',
            'description_short' => '',
        ]);
        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/g6.png'), resource_path('images/g6.png'));
            $category->addMedia(resource_path('images/g6.png'))->toMediaCollection('image');
        })->create([
            'type' => Good::class,
            'name' => 'Ваги',
            'seo_title' => 'Ваги',
            'seo_description' => 'Ваги',
            'seo_keywords' => 'Ваги',
            'top' => true,
            'description' => '',
            'description_short' => '',
        ]);
        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/g7.png'), resource_path('images/g7.png'));
            $category->addMedia(resource_path('images/g7.png'))->toMediaCollection('image');
        })->create([
            'type' => Good::class,
            'name' => 'Термінали збору данних',
            'seo_title' => 'Термінали збору данних',
            'seo_description' => 'Термінали збору данних',
            'seo_keywords' => 'Термінали збору данних',
            'top' => true,
            'description' => '',
            'description_short' => '',
        ]);
        Category::factory()->afterCreating(function (Category $category) {
            File::copy(public_path('images/g8.png'), resource_path('images/g8.png'));
            $category->addMedia(resource_path('images/g8.png'))->toMediaCollection('image');
        })->create([
            'type' => Good::class,
            'name' => 'Витратні матеріали',
            'seo_title' => 'Витратні матеріали',
            'seo_description' => 'Витратні матеріали',
            'seo_keywords' => 'Витратні матеріали',
            'top' => true,
            'description' => '',
            'description_short' => '',
        ]);
    }
}

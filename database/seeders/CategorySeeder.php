<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Good;
use App\Models\News;
use App\Models\Product;
use App\Models\Project;
use App\Models\Video;
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
        $this->runNewsCategories();
        $this->runProjectCategories();
        $this->runVideoCategories();
        $this->runProductCategories();
        $this->runGoodCategories();
    }

    public function runNewsCategories()
    {
        $data = [
            ['name' => 'Новини комнанії'],
            ['name' => 'Публікації'],
            ['name' => 'Новини школи'],
        ];

        foreach ($data as $item) {
            $attrs['type'] = News::class;
            $attrs['name'] = $item['name'];
            $attrs['seo_title'] = $item['name'];
            $attrs['seo_description'] = $item['name'];
            $attrs['seo_keywords'] = $item['name'];
            $category = Category::query()->create($attrs);
        }
    }

    public function runProjectCategories()
    {
        $data = [
            [
                'name' => 'Торгівля',
            ],
            [
                'name' => 'Медицина',
            ],
            [
                'name' => 'Логістика',
            ],
            [
                'name' => 'Виробництво',
            ],
            [
                'name' => 'Будівництво та нерухомість',
            ],
            [
                'name' => 'Галузі харчування',
            ],
        ];

        foreach ($data as $item) {
            $attrs['type'] = Project::class;
            $attrs['name'] = $item['name'];
            $attrs['seo_title'] = $item['name'];
            $attrs['seo_description'] = $item['name'];
            $attrs['seo_keywords'] = $item['name'];
            if ($item['slug'] ?? false) {
                $attrs['slug'] = $item['slug'];
            }
            $category = Category::query()->create($attrs);
        }
    }

    public function runVideoCategories()
    {
        $data = [
            [
                'name' => 'Навчання',
            ],
            [
                'name' => 'Інструкції',
            ],
            [
                'name' => 'Огляди',
            ],
        ];

        foreach ($data as $item) {
            $attrs['type'] = Video::class;
            $attrs['name'] = $item['name'];
            $attrs['seo_title'] = $item['name'];
            $attrs['seo_description'] = $item['name'];
            $attrs['seo_keywords'] = $item['name'];
            if ($item['slug'] ?? false) {
                $attrs['slug'] = $item['slug'];
            }
            $category = Category::query()->create($attrs);
        }
    }

    public function runProductCategories()
    {
        $data = [
            [
                'home' => 1,
                'image' => 'cc1.png',
                'background' => 'c2.svg',
                'name' => 'BAS',
                'slug' => 'bas-products',
                'description' => '<p><div class="anons">Якщо ви шукаєте оптимальний варіант для автоматизації вашого бізнесу, то сімейство програм BAS чудово для цього підходить.</div><div class="description"><div class="desc-title">Ознайомтесь з нашим каталогом або зверніться до нас і ми допоможемо вам визначитись</div><p>Яку саме програму BAS вам необхідно придбати. Наш досвід допоможе підібрати вам найоптимальніший варіант саме для вашого бізнесу.</p></div></p>',
            ],
        ];

        foreach ($data as $item) {
            $attrs['type'] = Product::class;
            $attrs['name'] = $item['name'];
            $attrs['description'] = $item['description'];
            $attrs['description_short'] = $item['description'];
            $attrs['seo_title'] = $item['name'];
            $attrs['seo_description'] = $item['name'];
            $attrs['seo_keywords'] = $item['name'];
            if ($item['slug'] ?? false) {
                $attrs['slug'] = $item['slug'];
            }
            $attrs['home'] = $item['home'];
            $category = Category::query()->create($attrs);
            File::copy(public_path('images/'.$item['image']), resource_path('images/'.$item['image']));
            $category->addMedia(resource_path('images/'.$item['image']))->toMediaCollection('image');
            File::copy(public_path('images/'.$item['background']), resource_path('images/'.$item['background']));
            $category->addMedia(resource_path('images/'.$item['background']))->toMediaCollection('background');
        }
    }

    public function runGoodCategories()
    {
        $data = [
            [
                'image' => 'g5.png',
                'home' => 1,
                'name' => 'Реєстратори розрахункових операцій',
                'description' => 'Реєстратори розрахункових операцій',
                'children' => [
                    ['name' => 'Касові апарати'],
                    ['name' => 'Фіскальні реєстратори'],
                    ['name' => 'Дисплеї покупця'],
                ],
            ],
            [
                'image' => 'g2.png',
                'home' => 1,
                'name' => 'Сканери штрихкодів',
                'description' => 'Сканери штрихкодів',
                'children' => [
                    ['name' => 'Ручні провідні'],
                    ['name' => 'Багатоплощинні'],
                    ['name' => 'Безпровідні'],
                    ['name' => 'Стаціонарні'],
                ],
            ],
            [
                'image' => 'g3.png',
                'home' => 1,
                'name' => 'Принтери чеків',
                'description' => 'Принтери чеків',
                'children' => [
                    ['name' => 'Мобільні'],
                    ['name' => 'Настільні'],
                ],
            ],
            [
                'image' => 'c4.png',
                'home' => 0,
                'name' => 'Лічильники банкнот',
                'description' => 'Лічильники банкнот',
                'children' => [
                    ['name' => 'Льчильники'],
                    ['name' => 'Сортувальники'],
                ],
            ],
            [
                'image' => 'g1.png',
                'home' => 1,
                'name' => 'POS-системи',
                'description' => 'POS-системи',
                'children' => [
                    ['name' => 'POS-термінали'],
                    ['name' => 'POS-монітори'],
                    ['name' => 'Ваги платформи'],
                ],
            ],
            [
                'image' => 'g6.png',
                'home' => 1,
                'name' => 'Ваги',
                'description' => 'Ваги',
                'children' => [
                    ['name' => 'Торгові'],
                    ['name' => 'Ваги з чекодруком'],
                    ['name' => 'Ваги платформи'],
                ],
            ],
            [
                'image' => 'g8.png',
                'home' => 1,
                'name' => 'Витратні матеріали',
                'description' => 'Витратні матеріали',
                'children' => [
                    ['name' => 'Касові стрічки'],
                    ['name' => 'Ектикетки'],
                ],
            ],
            [
                'image' => 'c8.png',
                'home' => 0,
                'name' => 'Принтери етикеток',
                'description' => 'Принтери етикеток',
                'children' => [
                    ['name' => 'Настільні'],
                    ['name' => 'Промислові'],
                ],
            ],
            [
                'image' => 'g7.png',
                'home' => 1,
                'name' => 'Термінали збору данних',
                'description' => 'Термінали збору данних',
                'children' => [],
            ],
            [
                'image' => 'c10.png',
                'home' => 0,
                'name' => 'Детектори валют',
                'description' => 'Детектори валют',
                'children' => [],
            ],
            [
                'image' => 'c11.png',
                'home' => 0,
                'name' => 'Термінали самообслуговування',
                'description' => 'Термінали самообслуговування',
                'children' => [],
            ],
            [
                'image' => 'g4.png',
                'home' => 1,
                'name' => 'Грошові скриньки',
                'description' => 'Грошові скриньки',
                'children' => [],
            ],
        ];

        foreach ($data as $item) {
            $attrs['type'] = Good::class;
            $attrs['name'] = $item['name'];
            $attrs['description_short'] = $item['description'];
            $attrs['seo_title'] = $item['name'];
            $attrs['seo_description'] = $item['name'];
            $attrs['seo_keywords'] = $item['name'];
            if ($item['slug'] ?? false) {
                $attrs['slug'] = $item['slug'];
            }
            $attrs['home'] = $item['home'];
            $category = Category::query()->create($attrs);
            File::copy(public_path('images/'.$item['image']), resource_path('images/'.$item['image']));
            $category->addMedia(resource_path('images/'.$item['image']))->toMediaCollection('image');

            foreach ($item['children'] as $child) {
                $category->children()->create($child);
            }
        }
    }
}

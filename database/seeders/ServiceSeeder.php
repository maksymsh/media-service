<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ServiceSeeder extends Seeder
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
                'image' => 's1.svg',
                'background' => 's11.svg',
                'name' => 'BAS',
                'slug' => 'bas-service',
                'description' => '<p><div class="anons">Програмні рішення для створення комплексних систем автоматизації бізнесу </div><ul class="ul-custom"><li>BAS Бухгалтерія / Базова / Проф / Корп</li><li>BAS Комплексне управління</li><li>BAS Управління торгівлею</li><li>BAS роздрібна торгівля</li><li>BAS Малий бізнес</li></ul></p>',
            ],
            [
                'image' => 's2.svg',
                'background' => 's22.svg',
                'name' => 'Впровадження CRM та корпоративних порталів',
                'description' => '<p><div class="anons">Команда професіоналів розробить сайт або додаток під ваші потреби</div><ul class="ul-custom"><li>Розробка сайтів та їх інтеграція</li><li>Впровадження CRM</li></ul></p>',
            ],
            [
                'image' => 's3.svg',
                'background' => 's33.svg',
                'name' => 'Обслуговування сервісів та мереж',
                'description' => '<p><div class="anons">Надійна локальна мережа та телефонія є фундаментом вашої безперебійної роботи бізнесу </div></p>',
            ],
            [
                'image' => 's4.svg',
                'background' => 's44.svg',
                'name' => 'Обслуговування РРО/ПРРО',
                'description' => '<p><div class="anons">Допоможемо на етапі підбору, впровадження та подальшого обслуговування </div></p>',
            ],
            [
                'image' => 's5.svg',
                'background' => 's55.svg',
                'name' => 'Розробка мобільних додатків',
                'description' => '<p><div class="anons">Команда професіоналів розробить сайт або додаток під ваші потреби</div></p>',
            ],
        ];

        foreach ($data as $item) {
            $attrs['name'] = $item['name'];
            $attrs['description'] = $item['description'];
            $attrs['seo_title'] = $item['name'];
            $attrs['seo_description'] = $item['name'];
            $attrs['seo_keywords'] = $item['name'];
            if ($item['slug'] ?? false) {
                $attrs['slug'] = $item['slug'];
            }
            $service = Service::factory()->create($attrs);
            File::copy(public_path('images/'.$item['image']), resource_path('images/'.$item['image']));
            $service->addMedia(resource_path('images/'.$item['image']))->toMediaCollection('image');
            File::copy(public_path('images/'.$item['background']), resource_path('images/'.$item['background']));
            $service->addMedia(resource_path('images/'.$item['background']))->toMediaCollection('background');
        }
    }
}

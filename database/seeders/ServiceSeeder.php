<?php

namespace Database\Seeders;

use App\Models\Category;
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
        Service::truncate();

        $categories = Category::query()->where('type', Service::class)->pluck('id')->toArray();

        Service::factory()->afterCreating(function (Service $service) use ($categories) {
            File::copy(public_path('images/s1.svg'), resource_path('images/s1.svg'));
            $service->addMedia(resource_path('images/s1.svg'))->toMediaCollection('background');
            File::copy(public_path('images/s11.svg'), resource_path('images/s11.svg'));
            $service->addMedia(resource_path('images/s11.svg'))->toMediaCollection('image');

            $service->categories()->sync($categories);
        })->create([
            'name' => 'BAS',
            'seo_title' => 'BAS',
            'seo_description' => 'BAS',
            'seo_keywords' => 'BAS',
            'description' => '<p>
    <div class="anons">Програмні рішення для створення комплексних систем автоматизації бізнесу </div>
    <ul class="ul-custom"><li>BAS Бухгалтерія / Базова / Проф / Корп</li><li>BAS Комплексне управління</li><li>BAS Управління торгівлею</li><li>BAS роздрібна торгівля</li><li>BAS Малий бізнес</li></ul>
</p>',
        ]);

        Service::factory()->afterCreating(function (Service $service) use ($categories) {
            File::copy(public_path('images/s2.svg'), resource_path('images/s2.svg'));
            $service->addMedia(resource_path('images/s2.svg'))->toMediaCollection('background');
            File::copy(public_path('images/s22.svg'), resource_path('images/s22.svg'));
            $service->addMedia(resource_path('images/s22.svg'))->toMediaCollection('image');

            $service->categories()->sync($categories);
        })->create([
            'name' => 'Впровадження CRM та корпоративних порталів',
            'seo_title' => 'Впровадження CRM та корпоративних порталів',
            'seo_description' => 'Впровадження CRM та корпоративних порталів',
            'seo_keywords' => 'Впровадження CRM та корпоративних порталів',
            'description' => '<p>
    <div class="anons">Команда професіоналів розробить сайт або додаток під ваші потреби</div>
    <ul class="ul-custom"><li>Розробка сайтів та їх інтеграція</li><li>Впровадження CRM</li></ul>
</p>',
        ]);

        Service::factory()->afterCreating(function (Service $service) use ($categories) {
            File::copy(public_path('images/s3.svg'), resource_path('images/s3.svg'));
            $service->addMedia(resource_path('images/s3.svg'))->toMediaCollection('background');
            File::copy(public_path('images/s33.svg'), resource_path('images/s33.svg'));
            $service->addMedia(resource_path('images/s33.svg'))->toMediaCollection('image');

            $service->categories()->sync($categories);
        })->create([
            'name' => 'Обслуговування сервісів та мереж',
            'seo_title' => 'Обслуговування сервісів та мереж',
            'seo_description' => 'Обслуговування сервісів та мереж',
            'seo_keywords' => 'Обслуговування сервісів та мереж',
            'description' => '<p>
    <div class="anons">Надійна локальна мережа та телефонія є фундаментом вашої безперебійної роботи бізнесу </div>
</p>',
        ]);

        Service::factory()->afterCreating(function (Service $service) use ($categories) {
            File::copy(public_path('images/s4.svg'), resource_path('images/s4.svg'));
            $service->addMedia(resource_path('images/s4.svg'))->toMediaCollection('background');
            File::copy(public_path('images/s44.svg'), resource_path('images/s44.svg'));
            $service->addMedia(resource_path('images/s44.svg'))->toMediaCollection('image');

            $service->categories()->sync($categories);
        })->create([
            'name' => 'Обслуговування РРО/ПРРО',
            'seo_title' => 'Обслуговування РРО/ПРРО',
            'seo_description' => 'Обслуговування РРО/ПРРО',
            'seo_keywords' => 'Обслуговування РРО/ПРРО',
            'description' => '<p>
    <div class="anons">Допоможемо на етапі підбору, впровадження та подальшого обслуговування </div>
</p>',
        ]);

        Service::factory()->afterCreating(function (Service $service) use ($categories) {
            File::copy(public_path('images/s5.svg'), resource_path('images/s5.svg'));
            $service->addMedia(resource_path('images/s5.svg'))->toMediaCollection('background');
            File::copy(public_path('images/s55.svg'), resource_path('images/s55.svg'));
            $service->addMedia(resource_path('images/s55.svg'))->toMediaCollection('image');

            $service->categories()->sync($categories);
        })->create([
            'name' => 'Розробка мобільних додатків',
            'seo_title' => 'Розробка мобільних додатків',
            'seo_description' => 'Розробка мобільних додатків',
            'seo_keywords' => 'Розробка мобільних додатків',
            'description' => '<p>
    <div class="anons">Команда професіоналів розробить сайт або додаток під ваші потреби</div>
</p>',
        ]);
    }
}

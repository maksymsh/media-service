<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $category = Category::query()->where('slug', 'bas-products')->first();

        Product::factory()->afterCreating(function (Product $product) use ($category) {
            $product->categories()->sync([$category->id]);
            File::copy(public_path('images/icon9.svg'), resource_path('images/icon9.svg'));
            $product->addMedia(resource_path('images/icon9.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'BAS Бухгалтерія',
            'seo_title' => 'BAS Бухгалтерія',
            'seo_description' => 'BAS Бухгалтерія',
            'seo_keywords' => 'BAS Бухгалтерія',
            'description' => '<p>
    <div class="col-anons">
        Готовий інструмент для вирішення всіх завдань, що стоять перед бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік продажів тощо.
    </div>
</p>',
        ]);
        Product::factory()->afterCreating(function (Product $product) use ($category) {
            $product->categories()->sync([$category->id]);
            File::copy(public_path('images/icon9.svg'), resource_path('images/icon9.svg'));
            $product->addMedia(resource_path('images/icon9.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'BAS Комплексне управління підприємством',
            'seo_title' => 'BAS Комплексне управління підприємством',
            'seo_description' => 'BAS Комплексне управління підприємством',
            'seo_keywords' => 'BAS Комплексне управління підприємством',
            'description' => '<p>
    <div class="col-anons">
        Готовий інструмент для вирішення всіх завдань, що стоять перед бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік продажів тощо.
    </div>
</p>',
        ]);
        Product::factory()->afterCreating(function (Product $product) use ($category) {
            $product->categories()->sync([$category->id]);
            File::copy(public_path('images/icon9.svg'), resource_path('images/icon9.svg'));
            $product->addMedia(resource_path('images/icon9.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'BAS Управлінн торгівлею',
            'seo_title' => 'BAS Управлінн торгівлею',
            'seo_description' => 'BAS Управлінн торгівлею',
            'seo_keywords' => 'BAS Управлінн торгівлею',
            'description' => '<p>
    <div class="col-anons">
        Готовий інструмент для вирішення всіх завдань, що стоять перед бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік продажів тощо.
    </div>
</p>',
        ]);
        Product::factory()->afterCreating(function (Product $product) use ($category) {
            $product->categories()->sync([$category->id]);
            File::copy(public_path('images/icon9.svg'), resource_path('images/icon9.svg'));
            $product->addMedia(resource_path('images/icon9.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'BAS Роздрібна торгівля',
            'seo_title' => 'BAS Роздрібна торгівля',
            'seo_description' => 'BAS Роздрібна торгівля',
            'seo_keywords' => 'BAS Роздрібна торгівля',
            'description' => '<p>
    <div class="col-anons">
        Готовий інструмент для вирішення всіх завдань, що стоять перед бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік продажів тощо.
    </div>
</p>',
        ]);
        Product::factory()->afterCreating(function (Product $product) use ($category) {
            $product->categories()->sync([$category->id]);
            File::copy(public_path('images/icon9.svg'), resource_path('images/icon9.svg'));
            $product->addMedia(resource_path('images/icon9.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'BAS Малий бізнес',
            'seo_title' => 'BAS Малий бізнес',
            'seo_description' => 'BAS Малий бізнес',
            'seo_keywords' => 'BAS Малий бізнес',
            'description' => '<p>
    <div class="col-anons">
        Готовий інструмент для вирішення всіх завдань, що стоять перед бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік продажів тощо.
    </div>
</p>',
        ]);
        Product::factory()->afterCreating(function (Product $product) use ($category) {
            $product->categories()->sync([$category->id]);
            File::copy(public_path('images/icon9.svg'), resource_path('images/icon9.svg'));
            $product->addMedia(resource_path('images/icon9.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'BAS ERP',
            'seo_title' => 'BAS ERP',
            'seo_description' => 'BAS ERP',
            'seo_keywords' => 'BAS ERP',
            'description' => '<p>
    <div class="col-anons">
        Готовий інструмент для вирішення всіх завдань, що стоять перед бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік продажів тощо.
    </div>
</p>',
        ]);
        Product::factory()->afterCreating(function (Product $product) use ($category) {
            $product->categories()->sync([$category->id]);
            File::copy(public_path('images/icon9.svg'), resource_path('images/icon9.svg'));
            $product->addMedia(resource_path('images/icon9.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'BAS АГРО. ERP',
            'seo_title' => 'BAS АГРО. ERP',
            'seo_description' => 'BAS АГРО. ERP',
            'seo_keywords' => 'BAS АГРО. ERP',
            'description' => '<p>
    <div class="col-anons">
        Готовий інструмент для вирішення всіх завдань, що стоять перед бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік продажів тощо.
    </div>
</p>',
        ]);
        Product::factory()->afterCreating(function (Product $product) use ($category) {
            $product->categories()->sync([$category->id]);
            File::copy(public_path('images/icon9.svg'), resource_path('images/icon9.svg'));
            $product->addMedia(resource_path('images/icon9.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'BAS Документообіг КОРП',
            'seo_title' => 'BAS Документообіг КОРП',
            'seo_description' => 'BAS Документообіг КОРП',
            'seo_keywords' => 'BAS Документообіг КОРП',
            'description' => '<p>
    <div class="col-anons">
        Готовий інструмент для вирішення всіх завдань, що стоять перед бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік продажів тощо.
    </div>
</p>',
        ]);
        Product::factory()->afterCreating(function (Product $product) use ($category) {
            $product->categories()->sync([$category->id]);
            File::copy(public_path('images/icon9.svg'), resource_path('images/icon9.svg'));
            $product->addMedia(resource_path('images/icon9.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'BAS Медицина',
            'seo_title' => 'BAS Медицина',
            'seo_description' => 'BAS Медицина',
            'seo_keywords' => 'BAS Медицина',
            'description' => '<p>
    <div class="col-anons">
        Готовий інструмент для вирішення всіх завдань, що стоять перед бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік продажів тощо.
    </div>
</p>',
        ]);
        Product::factory()->afterCreating(function (Product $product) use ($category) {
            $product->categories()->sync([$category->id]);
            File::copy(public_path('images/icon9.svg'), resource_path('images/icon9.svg'));
            $product->addMedia(resource_path('images/icon9.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'BAS Комплексне управління паливним підприємством',
            'seo_title' => 'BAS Комплексне управління паливним підприємством',
            'seo_description' => 'BAS Комплексне управління паливним підприємством',
            'seo_keywords' => 'BAS Комплексне управління паливним підприємством',
            'description' => '<p>
    <div class="col-anons">
        Готовий інструмент для вирішення всіх завдань, що стоять перед бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік продажів тощо.
    </div>
</p>',
        ]);
        Product::factory()->afterCreating(function (Product $product) use ($category) {
            $product->categories()->sync([$category->id]);
            File::copy(public_path('images/icon9.svg'), resource_path('images/icon9.svg'));
            $product->addMedia(resource_path('images/icon9.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'BAS Управління автотранспортом',
            'seo_title' => 'BAS Управління автотранспортом',
            'seo_description' => 'BAS Управління автотранспортом',
            'seo_keywords' => 'BAS Управління автотранспортом',
            'description' => '<p>
    <div class="col-anons">
        Готовий інструмент для вирішення всіх завдань, що стоять перед бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік продажів тощо.
    </div>
</p>',
        ]);
        Product::factory()->afterCreating(function (Product $product) use ($category) {
            $product->categories()->sync([$category->id]);
            File::copy(public_path('images/icon9.svg'), resource_path('images/icon9.svg'));
            $product->addMedia(resource_path('images/icon9.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'BAS Управління холдингом',
            'seo_title' => 'BAS Управління холдингом',
            'seo_description' => 'BAS Управління холдингом',
            'seo_keywords' => 'BAS Управління холдингом',
            'description' => '<p>
    <div class="col-anons">
        Готовий інструмент для вирішення всіх завдань, що стоять перед бухгалтерською службою підприємства, якщо бухгалтерська служба повністю відповідає за облік на підприємстві, включаючи, наприклад, виписку первинних документів, облік продажів тощо.
    </div>
</p>',
        ]);

        Product::factory()->afterCreating(function (Product $product) {
            File::copy(public_path('images/icon9.svg'), resource_path('images/icon9.svg'));
            $product->addMedia(resource_path('images/icon9.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'PROСкануй',
            'seo_title' => 'PROСкануй',
            'seo_description' => 'PROСкануй',
            'seo_keywords' => 'PROСкануй',
            'description' => '<p>
    <div class="col-anons">
        Програмні рішення для створення комплексних систем автоматизації бізнесу
    </div>
</p>',
        ]);
        Product::factory()->afterCreating(function (Product $product) {
            File::copy(public_path('images/icon7.svg'), resource_path('images/icon7.svg'));
            $product->addMedia(resource_path('images/icon7.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'PROДавай',
            'seo_title' => 'PROДавай',
            'seo_description' => 'PROДавай',
            'seo_keywords' => 'PROДавай',
            'description' => '<p>
    <div class="col-anons">
        П\'ять великих інструментів, які допомагають бізнесу ефективно працювати
    </div>
</p>',
        ]);
        Product::factory()->afterCreating(function (Product $product) {
            File::copy(public_path('images/icon10.svg'), resource_path('images/icon10.svg'));
            $product->addMedia(resource_path('images/icon10.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'Dilosoft',
            'seo_title' => 'Dilosoft',
            'seo_description' => 'Dilosoft',
            'seo_keywords' => 'Dilosoft',
            'description' => '<p>
    <div class="col-anons">
        Галузеве рішення призначене для роботи зі специфічним асортиментом
    </div>
</p>',
        ]);
        Product::factory()->afterCreating(function (Product $product) {
            File::copy(public_path('images/icon8.svg'), resource_path('images/icon8.svg'));
            $product->addMedia(resource_path('images/icon8.svg'))->toMediaCollection('image');
        })->create([
            'name' => 'CRM-системи',
            'seo_title' => 'CRM-системи',
            'seo_description' => 'CRM-системи',
            'seo_keywords' => 'CRM-системи',
            'description' => '<p>
    <div class="col-anons">
        П\'ять великих інструментів, які допомагають бізнесу ефективно працювати
    </div>
</p>',
        ]);
    }
}

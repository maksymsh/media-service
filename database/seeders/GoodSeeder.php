<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Good;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class GoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Good::truncate();

        $categories = Category::query()->where('type', Good::class)->pluck('id')->toArray();

        Good::factory()->afterCreating(function (Good $good) use ($categories) {
            File::copy(public_path('images/p1.png'), resource_path('images/p1.png'));
            $good->addMedia(resource_path('images/p1.png'))->toMediaCollection('image');
            File::copy(public_path('images/prod.jpg'), resource_path('images/prod.jpg'));
            $good->addMedia(resource_path('images/prod.jpg'))->toMediaCollection('images');

            $good->categories()->sync($categories);

            $good->attributes()->create(['attribute_id' => 1, 'value' => 'Термодрук']);
            $good->attributes()->create(['attribute_id' => 2, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 3, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 4, 'value' => 'Термодрук']);
            $good->attributes()->create(['attribute_id' => 5, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 6, 'value' => '60 мм/с']);
        })->create([
            'name' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_title' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_description' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_keywords' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
        ]);

        Good::factory()->afterCreating(function (Good $good) use ($categories) {
            File::copy(public_path('images/p2.png'), resource_path('images/p2.png'));
            $good->addMedia(resource_path('images/p2.png'))->toMediaCollection('image');
            File::copy(public_path('images/prod.jpg'), resource_path('images/prod.jpg'));
            $good->addMedia(resource_path('images/prod.jpg'))->toMediaCollection('images');

            $good->categories()->sync($categories);

            $good->attributes()->create(['attribute_id' => 1, 'value' => 'Термодрук']);
            $good->attributes()->create(['attribute_id' => 2, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 3, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 4, 'value' => 'Термодрук']);
            $good->attributes()->create(['attribute_id' => 5, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 6, 'value' => '60 мм/с']);
        })->create([
            'name' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_title' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_description' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_keywords' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
        ]);

        Good::factory()->afterCreating(function (Good $good) use ($categories) {
            File::copy(public_path('images/p3.png'), resource_path('images/p3.png'));
            $good->addMedia(resource_path('images/p3.png'))->toMediaCollection('image');
            File::copy(public_path('images/prod.jpg'), resource_path('images/prod.jpg'));
            $good->addMedia(resource_path('images/prod.jpg'))->toMediaCollection('images');

            $good->categories()->sync($categories);

            $good->attributes()->create(['attribute_id' => 1, 'value' => 'Термодрук']);
            $good->attributes()->create(['attribute_id' => 2, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 3, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 4, 'value' => 'Термодрук']);
            $good->attributes()->create(['attribute_id' => 5, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 6, 'value' => '60 мм/с']);
        })->create([
            'name' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_title' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_description' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_keywords' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
        ]);

        Good::factory()->afterCreating(function (Good $good) use ($categories) {
            File::copy(public_path('images/p4.png'), resource_path('images/p4.png'));
            $good->addMedia(resource_path('images/p4.png'))->toMediaCollection('image');
            File::copy(public_path('images/prod.jpg'), resource_path('images/prod.jpg'));
            $good->addMedia(resource_path('images/prod.jpg'))->toMediaCollection('images');

            $good->categories()->sync($categories);

            $good->attributes()->create(['attribute_id' => 1, 'value' => 'Термодрук']);
            $good->attributes()->create(['attribute_id' => 2, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 3, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 4, 'value' => 'Термодрук']);
            $good->attributes()->create(['attribute_id' => 5, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 6, 'value' => '60 мм/с']);
        })->create([
            'name' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_title' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_description' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_keywords' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
        ]);

        Good::factory()->afterCreating(function (Good $good) use ($categories) {
            File::copy(public_path('images/p5.png'), resource_path('images/p5.png'));
            $good->addMedia(resource_path('images/p5.png'))->toMediaCollection('image');
            File::copy(public_path('images/prod.jpg'), resource_path('images/prod.jpg'));
            $good->addMedia(resource_path('images/prod.jpg'))->toMediaCollection('images');

            $good->categories()->sync($categories);

            $good->attributes()->create(['attribute_id' => 1, 'value' => 'Термодрук']);
            $good->attributes()->create(['attribute_id' => 2, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 3, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 4, 'value' => 'Термодрук']);
            $good->attributes()->create(['attribute_id' => 5, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 6, 'value' => '60 мм/с']);
        })->create([
            'name' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_title' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_description' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_keywords' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
        ]);

        Good::factory()->afterCreating(function (Good $good) use ($categories) {
            File::copy(public_path('images/p6.png'), resource_path('images/p6.png'));
            $good->addMedia(resource_path('images/p6.png'))->toMediaCollection('image');
            File::copy(public_path('images/prod.jpg'), resource_path('images/prod.jpg'));
            $good->addMedia(resource_path('images/prod.jpg'))->toMediaCollection('images');

            $good->categories()->sync($categories);

            $good->attributes()->create(['attribute_id' => 1, 'value' => 'Термодрук']);
            $good->attributes()->create(['attribute_id' => 2, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 3, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 4, 'value' => 'Термодрук']);
            $good->attributes()->create(['attribute_id' => 5, 'value' => '60 мм/с']);
            $good->attributes()->create(['attribute_id' => 6, 'value' => '60 мм/с']);
        })->create([
            'name' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_title' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_description' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            'seo_keywords' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
        ]);
    }
}

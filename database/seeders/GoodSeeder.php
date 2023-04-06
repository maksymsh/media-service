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
        $data = [
            [
                'name' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
                'description' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
                'image' => 'p1.png',
                'images' => ['prod.jpg'],
            ],

            [
                'name' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
                'description' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
                'image' => 'p2.png',
                'images' => ['prod.jpg'],
            ],

            [
                'name' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
                'description' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
                'image' => 'p3.png',
                'images' => ['prod.jpg'],
            ],

            [
                'name' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
                'description' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
                'image' => 'p4.png',
                'images' => ['prod.jpg'],
            ],

            [
                'name' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
                'description' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
                'image' => 'p5.png',
                'images' => ['prod.jpg'],
            ],

            [
                'name' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
                'description' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
                'image' => 'p6.png',
                'images' => ['prod.jpg'],
            ],

        ];

        $categories = Category::query()->where('type', Good::class)->pluck('id')->toArray();

        foreach ($data as $item) {
            $attrs['name'] = $item['name'];
            $attrs['description'] = $item['description'];
            $attrs['description_short'] = $item['description'];
            $attrs['seo_title'] = $item['name'];
            $attrs['seo_description'] = $item['name'];
            $attrs['seo_keywords'] = $item['name'];
            $good = Good::factory()->create($attrs);
            File::copy(public_path('images/'.$item['image']), resource_path('images/'.$item['image']));
            $good->addMedia(resource_path('images/'.$item['image']))->toMediaCollection('image');
            foreach ($item['images'] as $image) {
                File::copy(public_path('images/'.$image), resource_path('images/'.$image));
                $good->addMedia(resource_path('images/'.$image))->toMediaCollection('images');
            }

            $good->categories()->sync($categories);

            $value = match (rand(0, 2)) {
                0 => 60, 1 => 70, 2 => 80
            };

            $good->attributes()->create(['attribute_id' => 1, 'value' => 'Термодрук']);
            $good->attributes()->create(['attribute_id' => 2, 'value' => $value.' мм/с']);
            $good->attributes()->create(['attribute_id' => 3, 'value' => $value.' мм/с']);
        }
    }
}

<?php

namespace Database\Seeders;

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
            Good::factory()->afterCreating(function (Good $good) {
                $good->addMedia(File::get(public_path('images/p1.png')))->toMediaCollection('image');
                $good->addMedia(File::get(public_path('images/prod.jpg')))->toMediaCollection('images');
            })->make([
                'name' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            ]),

            Good::factory()->afterCreating(function (Good $good) {
                $good->addMedia(File::get(public_path('images/p1.png')))->toMediaCollection('image');
                $good->addMedia(File::get(public_path('images/prod.jpg')))->toMediaCollection('images');
            })->make([
                'name' => 'Касовий апарат Гера MG-V545T.02 + БЖ + GSM Касовий апарат Гера MG-V545T.02 + БЖ + GSM',
            ]),

        ];

        foreach ($data as $item) {
            Good::query()->firstOrCreate($item->only(['name']), $item->getAttributes());
        }
    }
}

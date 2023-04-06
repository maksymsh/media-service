<?php

namespace Database\Seeders;

use App\Models\Vacancy;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

        ];

        foreach ($data as $item) {
            $attrs['name'] = $item['name'];
            $attrs['description'] = $item['description'];
            $attrs['seo_title'] = $item['name'];
            $attrs['seo_description'] = $item['name'];
            $attrs['seo_keywords'] = $item['name'];
            $vacancy = Vacancy::factory()->create($attrs);
            File::copy(public_path('images/'.$item['image']), resource_path('images/'.$item['image']));
            $vacancy->addMedia(resource_path('images/'.$item['image']))->toMediaCollection('image');
        }
    }
}

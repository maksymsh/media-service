<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class VideoSeeder extends Seeder
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
                'title' => 'Як самостійно оновити програму 1С:Підприємство через Інтернет',
                'description' => '',
                'url' => 'https://youtu.be/5_dcRN8il-w',
                'image' => 'video.jpg',
            ],
            [
                'title' => 'Як самостійно оновити програму 1С:Підприємство через Інтернет',
                'description' => '',
                'url' => 'https://youtu.be/5_dcRN8il-w',
                'image' => 'video2.jpg',
            ],
            [
                'title' => 'Як самостійно оновити програму 1С:Підприємство через Інтернет',
                'description' => '',
                'url' => 'https://youtu.be/5_dcRN8il-w',
                'image' => 'video3.jpg',
            ],
            [
                'title' => 'Як самостійно оновити програму 1С:Підприємство через Інтернет',
                'description' => '',
                'url' => 'https://youtu.be/5_dcRN8il-w',
                'image' => 'video4.jpg',
            ],
            [
                'title' => 'Як самостійно оновити програму 1С:Підприємство через Інтернет',
                'description' => '',
                'url' => 'https://youtu.be/5_dcRN8il-w',
                'image' => 'video5.jpg',
            ],
            [
                'title' => 'Як самостійно оновити програму 1С:Підприємство через Інтернет',
                'description' => '',
                'url' => 'https://youtu.be/5_dcRN8il-w',
                'image' => 'video6.jpg',
            ],
        ];

        $categories = Category::query()->where('type', Video::class)->pluck('id')->toArray();

        foreach ($data as $item) {
            $attrs['title'] = $item['title'];
            $attrs['description'] = $item['description'];
            $attrs['url'] = $item['url'];
            $news = Video::factory()->create($attrs);
            File::copy(public_path('images/'.$item['image']), resource_path('images/'.$item['image']));
            $news->addMedia(resource_path('images/'.$item['image']))->toMediaCollection('image');

            $news->categories()->sync($categories);
        }
    }
}

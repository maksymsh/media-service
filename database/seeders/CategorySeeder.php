<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Good;
use App\Models\News;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Database\Seeder;

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

        $types = [
            News::class,
            Product::class,
            Good::class,
            Service::class,
        ];

        foreach ($types as $type) {
            Category::factory(10)->create([
                'model_type' => $type,
            ])->each(function ($category) {
                $image = fake()->imageUrl;
                $category->addMediaFromUrl($image)->toMediaCollection('image');
            });
        }
    }
}

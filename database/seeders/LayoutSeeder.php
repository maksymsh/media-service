<?php

namespace Database\Seeders;

use App\Models\Layout;
use Illuminate\Database\Seeder;

class LayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uniqueKeys = ['slug'];

        $data = [
            Layout::factory()->make(['name' => 'Home Index', 'slug' => 'home-index']),
            Layout::factory()->make(['name' => 'Page Index', 'slug' => 'page-index']),
            Layout::factory()->make(['name' => 'Page About', 'slug' => 'page-about']),
            Layout::factory()->make(['name' => 'Page Contacts', 'slug' => 'page-contacts']),
            Layout::factory()->make(['name' => 'News Index', 'slug' => 'news-index']),
            Layout::factory()->make(['name' => 'News Categories', 'slug' => 'news-categories']),
            Layout::factory()->make(['name' => 'News Category', 'slug' => 'news-category']),
            Layout::factory()->make(['name' => 'News Post', 'slug' => 'news-post']),
            Layout::factory()->make(['name' => 'Product Index', 'slug' => 'product-index']),
            Layout::factory()->make(['name' => 'Product Categories', 'slug' => 'product-categories']),
            Layout::factory()->make(['name' => 'Product Category', 'slug' => 'product-category']),
            Layout::factory()->make(['name' => 'Product Page', 'slug' => 'product-page']),
            Layout::factory()->make(['name' => 'Goods Index', 'slug' => 'goods-index']),
            Layout::factory()->make(['name' => 'Goods Categories', 'slug' => 'goods-categories']),
            Layout::factory()->make(['name' => 'Goods Category', 'slug' => 'goods-category']),
            Layout::factory()->make(['name' => 'Goods Page', 'slug' => 'goods-page']),
            Layout::factory()->make(['name' => 'Service Index', 'slug' => 'service-index']),
            Layout::factory()->make(['name' => 'Service Categories', 'slug' => 'service-categories']),
            Layout::factory()->make(['name' => 'Service Category', 'slug' => 'service-category']),
            Layout::factory()->make(['name' => 'Service Page', 'slug' => 'service-page']),
            Layout::factory()->make(['name' => 'Project Index', 'slug' => 'project-index']),
            Layout::factory()->make(['name' => 'Project Page', 'slug' => 'project-page']),
            Layout::factory()->make(['name' => 'Vacancy Index', 'slug' => 'vacancy-index']),
            Layout::factory()->make(['name' => 'Vacancy Page', 'slug' => 'vacancy-page']),
            Layout::factory()->make(['name' => 'Study Index', 'slug' => 'study-index']),
            Layout::factory()->make(['name' => 'Study Page', 'slug' => 'study-page']),
            Layout::factory()->make(['name' => 'Order Index', 'slug' => 'order-index']),
            Layout::factory()->make(['name' => 'Account Index', 'slug' => 'account-index']),
        ];



        foreach ($data as $item) {
            $layout = Layout::query()->firstOrCreate($item->only($uniqueKeys), $item->getAttributes());

            if ($layout->wasRecentlyCreated) {
                //
            }
        }
    }
}

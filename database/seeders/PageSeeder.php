<?php

namespace Database\Seeders;

use App\Models\Layout;
use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $layouts = Layout::query()->get();

        $uniqueKeys = ['code'];

        $data = [
            Page::factory()->make([
                'code' => 'home',
                'title' => 'Home',
                'layout_id' => $layouts->where('slug', 'home-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'about',
                'title' => 'About us',
                'layout_id' => $layouts->where('slug', 'page-about')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'contacts',
                'title' => 'Contacts',
                'layout_id' => $layouts->where('slug', 'page-contacts')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'news',
                'title' => 'News',
                'layout_id' => $layouts->where('slug', 'news-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'news-categories',
                'title' => 'News Categories',
                'layout_id' => $layouts->where('slug', 'news-categories')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'news-category',
                'title' => 'News Category',
                'layout_id' => $layouts->where('slug', 'news-category')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'news-post',
                'title' => 'News post',
                'layout_id' => $layouts->where('slug', 'news-post')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'products',
                'title' => 'Products',
                'layout_id' => $layouts->where('slug', 'product-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'product-categories',
                'title' => 'Product Categories',
                'layout_id' => $layouts->where('slug', 'product-categories')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'product-category',
                'title' => 'Product Category',
                'layout_id' => $layouts->where('slug', 'product-category')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'product-page',
                'title' => 'Product page',
                'layout_id' => $layouts->where('slug', 'product-page')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'goods',
                'title' => 'Goods',
                'layout_id' => $layouts->where('slug', 'good-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'good-categories',
                'title' => 'Good Categories',
                'layout_id' => $layouts->where('slug', 'good-categories')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'good-category',
                'title' => 'Good Category',
                'layout_id' => $layouts->where('slug', 'good-category')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'good-page',
                'title' => 'Good page',
                'layout_id' => $layouts->where('slug', 'good-page')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'services',
                'title' => 'Services',
                'layout_id' => $layouts->where('slug', 'service-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'service-categories',
                'title' => 'Service Categories',
                'layout_id' => $layouts->where('slug', 'service-categories')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'service-category',
                'title' => 'Service Category',
                'layout_id' => $layouts->where('slug', 'service-category')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'service-page',
                'title' => 'Service page',
                'layout_id' => $layouts->where('slug', 'service-page')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'projects',
                'title' => 'Projects',
                'layout_id' => $layouts->where('slug', 'project-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'project-page',
                'title' => 'Project page',
                'layout_id' => $layouts->where('slug', 'project-page')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'vacancies',
                'title' => 'Vacancies',
                'layout_id' => $layouts->where('slug', 'vacancy-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'vacancy-page',
                'title' => 'Vacancy page',
                'layout_id' => $layouts->where('slug', 'vacancy-page')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'studies',
                'title' => 'Studies',
                'layout_id' => $layouts->where('slug', 'study-index')->first()?->id,
            ]),
            Page::factory()->make([
                'code' => 'study-page',
                'title' => 'Study page',
                'layout_id' => $layouts->where('slug', 'study-page')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'order',
                'title' => 'Order',
                'layout_id' => $layouts->where('slug', 'order-index')->first()?->id,
            ]),

            //
            Page::factory()->make([
                'code' => 'account',
                'title' => 'Account',
                'layout_id' => $layouts->where('slug', 'account-index')->first()?->id,
            ]),
        ];

        foreach ($data as $item) {
            $page = Page::query()->firstOrCreate($item->only($uniqueKeys), $item->getAttributes());

            if ($page->wasRecentlyCreated) {
//                $image = fake()->image;
//                $page->addMedia($image)->toMediaCollection('image');
            }
        }
    }
}

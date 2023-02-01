<?php

namespace Database\Seeders;

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
        $uniqueKeys = ['code'];

        $data = [
            Page::factory([
                'code' => 'home',
                'title' => 'Home',
                'url' => '/',
            ]),
            Page::factory([
                'code' => 'about',
                'title' => 'About us',
                'url' => '/about-us',
            ]),
            Page::factory([
                'code' => 'contacts',
                'title' => 'Contacts',
                'url' => '/contacts',
            ]),
        ];

        foreach ($data as $item) {
            Page::query()->firstOrCreate($item->only($uniqueKeys), $item->getAttributes());
        }
    }
}

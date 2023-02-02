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
        $data = [
            Layout::factory()->make(['name' => 'Home Index']),

            Layout::factory()->make(['name' => 'Page Index']),
            Layout::factory()->make(['name' => 'Page About']),
            Layout::factory()->make(['name' => 'Page Contacts']),

            Layout::factory()->make(['name' => 'News Index']),
            Layout::factory()->make(['name' => 'News Categories']),
            Layout::factory()->make(['name' => 'News Category']),
            Layout::factory()->make(['name' => 'News Post']),

            Layout::factory()->make(['name' => 'Product Index']),
            Layout::factory()->make(['name' => 'Product Categories']),
            Layout::factory()->make(['name' => 'Product Category']),
            Layout::factory()->make(['name' => 'Product Page']),

            Layout::factory()->make(['name' => 'Goods Index']),
            Layout::factory()->make(['name' => 'Goods Categories']),
            Layout::factory()->make(['name' => 'Goods Category']),
            Layout::factory()->make(['name' => 'Goods Page']),

            Layout::factory()->make(['name' => 'Service Index']),
            Layout::factory()->make(['name' => 'Service Categories']),
            Layout::factory()->make(['name' => 'Service Category']),
            Layout::factory()->make(['name' => 'Service Page']),

            Layout::factory()->make(['name' => 'Project Index']),
            Layout::factory()->make(['name' => 'Project Page']),

            Layout::factory()->make(['name' => 'Vacancy Index']),
            Layout::factory()->make(['name' => 'Vacancy Page']),

            Layout::factory()->make(['name' => 'Study Index']),
            Layout::factory()->make(['name' => 'Study Page']),

            Layout::factory()->make(['name' => 'Order Index']),

            Layout::factory()->make(['name' => 'Account Index']),
        ];
    }
}

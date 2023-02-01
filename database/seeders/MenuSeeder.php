<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::truncate();
        MenuItem::truncate();

        Menu::factory(10)->afterCreating(function ($menu) {
            MenuItem::factory(10)->create([
                'menu_id' => $menu->id,
            ]);
        })->create();
    }
}

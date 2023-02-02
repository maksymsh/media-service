<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resources = [
            'pages' => ['index', 'create', 'edit', 'delete'],
            'layouts' => ['index', 'create', 'edit', 'delete'],
            'menus' => ['index', 'create', 'edit', 'delete'],
            'menu_items' => ['index', 'create', 'edit', 'delete'],
            'banners' => ['index', 'create', 'edit', 'delete'],
            'news' => ['index', 'create', 'edit', 'delete'],
            'products' => ['index', 'create', 'edit', 'delete'],
            'goods' => ['index', 'create', 'edit', 'delete'],
            'services' => ['index', 'create', 'edit', 'delete'],
            'projects' => ['index', 'create', 'edit', 'delete'],
            'vacancies' => ['index', 'create', 'edit', 'delete'],
            'studies' => ['index', 'create', 'edit', 'delete'],
            'orders' => ['index', 'create', 'edit', 'delete'],
            'roles' => ['index', 'create', 'edit', 'delete'],
            'settings' => ['index'],
        ];

        foreach ($resources as $resource => $actions) {
            foreach ($actions as $action) {
                $ability = $resource.'.'.$action;

                Permission::firstOrCreate(['name' => $ability], ['name' => $ability]);
            }
        }
    }
}

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
            'banners',
            'categories',
            'goods',
            'menus',
            'menu_items',
            'news',
            'pages',
            'products',
            'projects',
            'roles',
            'services',
            'studies',
            'users',
            'vacancies',
            'orders',
        ];

        $actions = [
            'index',
            'create',
            'edit',
            'delete',
        ];

        $permissions = [
            'settings.index',
        ];

        foreach ($resources as $resource) {
            foreach ($actions as $action) {
                $ability = $resource.'.'.$action;

                Permission::firstOrCreate(['name' => $ability], ['name' => $ability]);
            }
        }

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission], ['name' => $permission]);
        }
    }
}

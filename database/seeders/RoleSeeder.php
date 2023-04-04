<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'superadmin'],
            ['name' => 'admin'],
            ['name' => 'moderator'],
            ['name' => 'user'],
        ];

        $permissions = Permission::query()->get();

        foreach ($data as $item) {
            $attrs['name'] = $item['name'];

            $role = Role::query()->create($attrs);

            foreach ($permissions as $permission) {
                $role->givePermissionTo($permission);
            }
        }
    }
}

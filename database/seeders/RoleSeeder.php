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
        /** @var $data array<Role> */
        $uniqueKeys = ['name'];

        $data = [
            Role::factory()->make(['name' => 'superadmin']),
            Role::factory()->make(['name' => 'admin']),
            Role::factory()->make(['name' => 'moderator']),
            Role::factory()->make(['name' => 'user']),
        ];

        $permissions = Permission::query()->get();

        foreach ($data as $item) {
            $role = Role::query()->firstOrCreate($item->only($uniqueKeys), $item->getAttributes());

            foreach ($permissions as $permission) {
                $role->givePermissionTo($permission);
            }
        }
    }
}

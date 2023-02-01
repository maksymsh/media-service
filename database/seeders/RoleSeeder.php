<?php

namespace Database\Seeders;

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
            Role::factory()->make(['name' => 'admin']),
            Role::factory()->make(['name' => 'moderator']),
            Role::factory()->make(['name' => 'user']),
        ];

        foreach ($data as $item) {
            Role::query()->create($item->getAttributes());
        }
    }
}

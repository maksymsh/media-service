<?php

namespace Database\Seeders;

use App\Models\User;
use Exception;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var $data array<User> */
        $uniqueKeys = ['username', 'email'];

        try {
            $superadmin = User::factory()->make([
                'firstname' => 'Super',
                'lastname' => 'Admin',
                'username' => 'superadmin',
                'email' => 'superadmin@media-service.test',
            ]);
            $admin = User::factory()->make([
                'firstname' => 'Admin',
                'lastname' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@media-service.test',
            ]);

            $moderator = User::factory()->make([
                'firstname' => 'Moderator',
                'lastname' => 'Moderator',
                'username' => 'moderator',
                'email' => 'moderator@media-service.test',
            ]);

            $user = User::factory()->make([
                'firstname' => 'User',
                'lastname' => 'User',
                'username' => 'user',
                'email' => 'user@media-service.test',
            ]);

            $superAdminUser = User::query()->firstOrCreate($superadmin->only($uniqueKeys), $superadmin->getAttributes());
            $superAdminUser->assignRole('superadmin');

            $adminUser = User::query()->firstOrCreate($admin->only($uniqueKeys), $admin->getAttributes());
            $adminUser->assignRole('admin');

            $moderatorUser = User::query()->firstOrCreate($moderator->only($uniqueKeys), $moderator->getAttributes());
            $moderatorUser->assignRole('moderator');

            $userUser = User::query()->firstOrCreate($user->only($uniqueKeys), $user->getAttributes());
            $userUser->assignRole('user');

            User::factory(20)->create();
        } catch (Exception $e) {
            $this->command->warn($e->getMessage());
        }
    }
}

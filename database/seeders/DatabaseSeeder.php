<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(PageSeeder::class);
        $this->call(MenuSeeder::class);

        $this->call(BannerSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(GoodSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(StudySeeder::class);
        $this->call(VacancySeeder::class);

        $this->call(OrderSeeder::class);
    }
}

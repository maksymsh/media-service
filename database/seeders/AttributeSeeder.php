<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attribute::factory()->create(['name' => 'Метод друку']);
        Attribute::factory()->create(['name' => 'Швидкість друку']);
        Attribute::factory()->create(['name' => 'Контрольна стрічка']);
        Attribute::factory()->create(['name' => 'Метод друку']);
        Attribute::factory()->create(['name' => 'Швидкість друку']);
        Attribute::factory()->create(['name' => 'Контрольна стрічка']);
    }
}

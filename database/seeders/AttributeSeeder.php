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
        $data = [
            ['name' => 'Метод друку'],
            ['name' => 'Швидкість друку'],
            ['name' => 'Контрольна стрічка'],
        ];

        foreach ($data as $item) {
            $attrs['name'] = $item['name'];
            $attribute = Attribute::factory()->create($attrs);
        }
    }
}

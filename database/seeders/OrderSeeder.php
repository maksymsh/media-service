<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

        ];

        foreach ($data as $item) {
            $attrs['name'] = $item['name'];
            $attrs['description'] = $item['description'];
            $order = Order::factory()->create($attrs);
        }
    }
}

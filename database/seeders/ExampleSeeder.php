<?php

namespace Database\Seeders;

use App\Models\Example;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var $data array<Model> */
        $uniqueKeys = ['id'];

        try {
            $data = [
                Example::factory()->make(['id' => 1]),
            ];

            foreach ($data as $item) {
                Example::query()->firstOrCreate($item->only($uniqueKeys), $item->getAttributes());
            }
        } catch (\Exception $e) {
            //
        }
    }
}

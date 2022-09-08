<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
// use Database\Seeders\DB;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ['apple', 'patato', 'coke'];
        foreach ($items as $item) {
            DB::table('items')->insert([
                'name' => $item,
                'price' => mt_rand(50, 1000),
            ]);
        }
    }
}

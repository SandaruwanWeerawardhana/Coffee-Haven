<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
     public function run(): void
    {
        Item::create([
            'name' => 'Espresso',
            'price' => 250.00,
            'description' => 'Strong black coffee'
        ]);

        Item::create([
            'name' => 'Cappuccino',
            'price' => 300.00,
            'description' => 'Coffee with milk foam'
        ]);

        Item::create([
            'name' => 'Mocha',
            'price' => 350.00,
            'description' => 'Chocolate flavored coffee'
        ]);
    }
}

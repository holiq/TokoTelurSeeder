<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::query()->insert([
            'name' => 'Telur Ayam',
            'stock_kg' => 0,
            'price_kg' => 0,
            'created_at' => date("Y-m-d H:i:s", strtotime("-91 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-91 day")),
        ]);
        Product::query()->insert([
            'name' => 'Telur Bebek',
            'stock_kg' => 0,
            'price_kg' => 0,
            'created_at' => date("Y-m-d H:i:s", strtotime("-91 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-91 day")),
        ]);
    }
}

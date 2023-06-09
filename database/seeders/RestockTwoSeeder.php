<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestockTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owner = User::query()->where('role', 'owner')->first();
        $telurAyam = Product::query()->where('name', 'Telur Ayam')->first();
        $telurBebek = Product::query()->where('name', 'Telur Bebek')->first();

        $restockAyam = Transaction::query()->create([
            'user_id' => $owner->id,
            'product_id' => $telurAyam->id,
            'quantity' => 230,
            'price_kg' => 20000,
            'total_price' => 4600000,
            'type' => 'restock',
            'created_at' => date("Y-m-d H:i:s", strtotime("-58 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-58 day")),
        ]);
        $restockBebek = Transaction::query()->create([
            'user_id' => $owner->id,
            'product_id' => $telurBebek->id,
            'quantity' => 135,
            'price_kg' => 25000,
            'total_price' => 3375000,
            'type' => 'restock',
            'created_at' => date("Y-m-d H:i:s", strtotime("-58 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-58 day")),
        ]);

        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg + $restockAyam->quantity,
            'price_kg' => $restockAyam->price_kg + 1000,
        ]);

        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg + $restockBebek->quantity,
            'price_kg' => $restockBebek->price_kg + 1000,
        ]);
    }
}

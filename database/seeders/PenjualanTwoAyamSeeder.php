<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanTwoAyamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bayu = User::query()->where('full_name', 'Bayu')->first();
        $wahyu = User::query()->where('full_name', 'Wahyu')->first();
        $telurAyam = Product::query()->where('name', 'Telur Ayam')->first();

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 8,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 8,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-57 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-57 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 8,
        ]);

        Transaction::query()->insert([
            'user_id' => $wahyu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 30,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 30,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-57 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-57 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 30,
        ]);

        Transaction::query()->insert([
            'user_id' => $wahyu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 25,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 25,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-56 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-56 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 25,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-56 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-56 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-55 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-55 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-54 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-54 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $wahyu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-53 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-53 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-52 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-52 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $wahyu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-52 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-52 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $wahyu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-51 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-51 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-50 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-50 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-49 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-49 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $wahyu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-48 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-48 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-47 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-47 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $wahyu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-46 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-46 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-45 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-45 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-44 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-44 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);
    }
}

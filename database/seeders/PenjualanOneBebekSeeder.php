<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanOneBebekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bayu = User::query()->where('full_name', 'Bayu')->first();
        $putri = User::query()->where('full_name', 'Putri')->first();
        $telurBebek = Product::query()->where('name', 'Telur Bebek')->first();

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-90 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-90 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $putri->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-90 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-90 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-89 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-89 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $putri->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-89 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-89 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-88 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-88 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $putri->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-88 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-88 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-87 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-87 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-87 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-87 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-86 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-86 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-86 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-86 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-85 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-85 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-85 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-85 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-84 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-84 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-84 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-84 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ]);
    }
}

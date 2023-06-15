<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanTwoBebekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bayu = User::query()->where('full_name', 'Bayu')->first();
        $putri = User::query()->where('full_name', 'Putri')->first();
        $wahyu = User::query()->where('full_name', 'Wahyu')->first();
        $telurBebek = Product::query()->where('name', 'Telur Bebek')->first();

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-57 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-57 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $wahyu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-55 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-55 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $putri->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-54 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-54 day")),
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
            'created_at' => date("Y-m-d H:i:s", strtotime("-53 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-53 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ]);
        $bayu = User::query()->where('role', 'kasir')->first();
        $telurBebek = Product::query()->where('name', 'Telur Bebek')->first();

        Transaction::query()->insert([
            'user_id' => $wahyu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-50 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-50 day")),
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
            'created_at' => date("Y-m-d H:i:s", strtotime("-49 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-4948 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $wahyu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-48 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-48 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $wahyu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-48 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-48 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ]);
        $bayu = User::query()->where('role', 'kasir')->first();
        $telurBebek = Product::query()->where('name', 'Telur Bebek')->first();

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-45 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-45 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $bayu->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-44 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-44 day")),
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
            'created_at' => date("Y-m-d H:i:s", strtotime("-43 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-43 day")),
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
            'created_at' => date("Y-m-d H:i:s", strtotime("-42 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-42 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ]);
        $bayu = User::query()->where('role', 'kasir')->first();
        $telurBebek = Product::query()->where('name', 'Telur Bebek')->first();

        Transaction::query()->insert([
            'user_id' => $putri->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-40 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-40 day")),
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
            'created_at' => date("Y-m-d H:i:s", strtotime("-39 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-39 day")),
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
            'created_at' => date("Y-m-d H:i:s", strtotime("-38 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-38 day")),
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
            'created_at' => date("Y-m-d H:i:s", strtotime("-38 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-38 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ]);
    }
}

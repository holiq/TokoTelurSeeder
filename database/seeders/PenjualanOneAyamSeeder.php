<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanOneAyamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kasir = User::query()->where('role', 'kasir')->first();
        $telurAyam = Product::query()->where('name', 'Telur Ayam')->first();

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 20,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 20,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-90 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-90 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 20,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 30,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 30,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-90 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-90 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 30,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 25,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 25,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-89 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-89 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 25,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-89 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-89 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-88 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-88 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-88 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-88 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-87 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-87 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-87 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-87 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-86 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-86 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-86 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-86 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-85 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-85 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-85 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-85 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-84 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-84 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-84 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-84 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-83 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-83 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-83 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-83 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-82 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-82 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-82 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-82 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-81 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-81 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-81 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-81 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-80 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-80 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-80 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-80 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 10,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-79 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-79 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 10,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 15,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-79 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-79 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 15,
        ]);
    }
}

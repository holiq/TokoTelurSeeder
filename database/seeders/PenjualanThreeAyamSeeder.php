<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanThreeAyamSeeder extends Seeder
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
            'quantity' => 8,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 8,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-29 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-29 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 8,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 5,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-29 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-29 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 2,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-28 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-28 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 4,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 4,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-28 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-28 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 4,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 3,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-27 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-27 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 8,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 8,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-27 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-27 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 8,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 5,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-26 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-26 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 2,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-26 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-26 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 4,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 4,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-25 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-25 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 4,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 3,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-25 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-25 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 3,
        ]);
        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 8,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 8,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-24 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-24 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 8,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 5,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-23 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-23 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 2,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-23 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-23 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 4,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 4,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-22 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-22 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 4,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 3,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-21 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-21 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 8,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 8,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-20 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-20 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 8,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 5,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-20 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-20 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 2,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-19 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-19 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 4,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 4,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-19 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-19 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 4,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 3,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-18 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-18 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 8,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 8,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-17 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-17 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 8,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 5,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-17 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-17 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 2,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-16 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-16 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 4,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 4,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-16 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-16 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 4,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 3,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-15 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-15 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 8,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 8,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-14 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-14 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 8,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 5,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-12 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-12 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 2,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-11 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-11 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 4,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 4,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-10 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-10 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 4,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 3,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-9 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-9 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 8,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 8,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-8 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-8 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 8,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 5,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-7 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-7 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 2,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-7 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-7 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 4,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 4,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-6 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-6 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 4,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 3,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-6 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-6 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 8,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 8,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-5 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-5 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 8,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 5,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-5 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-5 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 2,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-4 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-4 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 4,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 4,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-4 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-4 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 4,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 3,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-3 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-3 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 8,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 8,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-3 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-3 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 8,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 5,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-2 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-2 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 2,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-2 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-2 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 4,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 4,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-1 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-1 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 4,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 3,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-1 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-1 day")),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 3,
        ]);
        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 8,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 8,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 8,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 5,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurAyam->id,
            'quantity' => 2,
            'price_kg' => $telurAyam->price_kg,
            'total_price' => $telurAyam->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        $telurAyam->update([
            'stock_kg' => $telurAyam->stock_kg - 2,
        ]);
    }
}

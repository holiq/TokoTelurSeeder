<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanThreeBebekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kasir = User::query()->where('role', 'kasir')->first();
        $telurBebek = Product::query()->where('name', 'Telur Bebek')->first();

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-28 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-28 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 2,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-28 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-28 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 1,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 1,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-27 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-27 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 1,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 3,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-26 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-26 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-26 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-26 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 2,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-25 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-25 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 1,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 1,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-24 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-24 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 1,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 3,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-23 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-23 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-23 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-23 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 2,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-22 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-22 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 1,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 1,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-21 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-21 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 1,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 3,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-20 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-20 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-19 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-19 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 2,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-19 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-19 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 1,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 1,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-18 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-18 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 1,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 3,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-18 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-18 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-17 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-17 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 2,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-16 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-16 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 1,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 1,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-15 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-15 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 1,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 3,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-14 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-14 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-14 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-14 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 2,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-13 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-13 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 1,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 1,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-12 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-12 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 1,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 3,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-11 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-11 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-10 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-10 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 2,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-10 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-10 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 1,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 1,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-9 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-9 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 1,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 3,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-8 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-8 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-7 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-7 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 2,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-7 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-7 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 1,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 1,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-6 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-6 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 1,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 3,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-6 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-6 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-5 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-5 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 2,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-4 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-4 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 1,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 1,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-4 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-4 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 1,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 3,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-32 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-32 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-32 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-32 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 2,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-2 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-2 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 1,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 1,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-2 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-2 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 1,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 3,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-1 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-1 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 3,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-1 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-1 day")),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 2,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 2,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 2,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 1,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 1,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 1,
        ]);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 3,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->price_kg * 3,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        $telurBebek->update([
            'stock_kg' => $telurBebek->stock_kg - 3,
        ]);
    }
}

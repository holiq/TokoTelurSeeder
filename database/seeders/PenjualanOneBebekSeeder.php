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
        $kasir = User::query()->where('role', 'kasir')->first();
        $telurBebek = Product::query()->where('name', 'Telur Bebek')->first();

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->id * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-90 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-90 day")),
        ]);
        $telurBebek->query()->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ], $telurBebek->id);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->id * 15,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-90 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-90 day")),
        ]);
        $telurBebek->query()->update([
            'stock_kg' => $telurBebek->stock_kg - 15,
        ], $telurBebek->id);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->id * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-89 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-89 day")),
        ]);
        $telurBebek->query()->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ], $telurBebek->id);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->id * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-89 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-89 day")),
        ]);
        $telurBebek->query()->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ], $telurBebek->id);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->id * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-88 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-88 day")),
        ]);
        $telurBebek->query()->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ], $telurBebek->id);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->id * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-88 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-88 day")),
        ]);
        $telurBebek->query()->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ], $telurBebek->id);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->id * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-87 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-87 day")),
        ]);
        $telurBebek->query()->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ], $telurBebek->id);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->id * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-87 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-87 day")),
        ]);
        $telurBebek->query()->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ], $telurBebek->id);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->id * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-86 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-86 day")),
        ]);
        $telurBebek->query()->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ], $telurBebek->id);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->id * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-86 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-86 day")),
        ]);
        $telurBebek->query()->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ], $telurBebek->id);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->id * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-85 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-85 day")),
        ]);
        $telurBebek->query()->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ], $telurBebek->id);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->id * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-85 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-85 day")),
        ]);
        $telurBebek->query()->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ], $telurBebek->id);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 5,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->id * 5,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-84 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-84 day")),
        ]);
        $telurBebek->query()->update([
            'stock_kg' => $telurBebek->stock_kg - 5,
        ], $telurBebek->id);

        Transaction::query()->insert([
            'user_id' => $kasir->id,
            'product_id' => $telurBebek->id,
            'quantity' => 10,
            'price_kg' => $telurBebek->price_kg,
            'total_price' => $telurBebek->id * 10,
            'type' => 'penjualan',
            'created_at' => date("Y-m-d H:i:s", strtotime("-84 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-84 day")),
        ]);
        $telurBebek->query()->update([
            'stock_kg' => $telurBebek->stock_kg - 10,
        ], $telurBebek->id);
    }
}
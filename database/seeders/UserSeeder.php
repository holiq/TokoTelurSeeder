<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->insert([
            'full_name' => 'Holiq Ibrahim',
            'username' => 'holiq',
            'role' => 'owner',
            'password' => md5('123'),
            'created_at' => date("Y-m-d H:i:s", strtotime("-92 day")),
            'updated_at' => date("Y-m-d H:i:s", strtotime("-92 day")),
        ]);

        User::query()->insert([
            'full_name' => 'Bayu Sebastian',
            'username' => 'babas',
            'role' => 'kasir',
            'password' => md5('123'),
            
        ]);
    }
}

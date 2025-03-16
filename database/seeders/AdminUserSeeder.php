<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@metasoft.com'], // Kiểm tra email có tồn tại chưa
            [
                'name' => 'Super Admin',
                'username' => 'admin',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'is_active' => true,
            ]
        );
        User::updateOrCreate(
            ['email' => 'test@gmail.com'], // Kiểm tra email có tồn tại chưa
            [
                'name' => 'Test',
                'username' => 'User',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'is_active' => true,
            ]
        );
    }
}

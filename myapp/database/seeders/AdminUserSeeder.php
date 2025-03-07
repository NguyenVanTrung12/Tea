<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'vantrung1242005@gmail.com',
            'password' => Hash::make('admin123'), // Thay 'password' bằng mật khẩu bạn muốn
        ]);
    }
}
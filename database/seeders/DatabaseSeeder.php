<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'sadwa',
            'name' => 'sadwa',
            'address' => 'Medan',
            'phone' => '123456789012',
            'email' => 'sadwa01@gmail.com',
            'password' => bcrypt(12345)
        ]);
        User::create([
            'username' => 'admin',
            'name' => 'Admin',
            'address' => 'Medan',
            'phone' => '123456789011',
            'email' => 'admin@gmail.com',
            'password' => bcrypt(123)
        ]);
    }
}

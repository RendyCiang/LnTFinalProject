<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Monolog\Handler\RollbarHandler;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'address' => 'admin address',
            'phone' => '081111111111',
            'Day_of_Birth' => '2000-01-01'
        ]);

        \App\Models\User::create([
            'name' => 'user',
            'email' => 'user@email.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'address' => 'user address',
            'phone' => '081111111111',
            'Day_of_Birth' => '2000-01-01'
        ]);
    }
}

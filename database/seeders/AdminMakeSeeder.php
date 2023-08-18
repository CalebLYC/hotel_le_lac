<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminMakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Caleb LYC',
            'email' => 'caleblyc@gmail.com',
            'password' => Hash::make('jeslelacprojet'),
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminlelac@hotel.com'),
            'role_id' => 2,
        ]);
    }
}
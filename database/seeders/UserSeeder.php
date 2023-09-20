<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(20)->create();
        User::create([
            'name' => "Galih",
            'email' => "galih@gmail.com",
            'email_verified_at' => now(),
            'phone' => '6287738479403',
            'bio' => 'Gw cakep banget',
            'role' => 'admin',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => "Super Admin",
            'email' => "superadmin@gmail.com",
            'email_verified_at' => now(),
            'phone' => '6287738479212',
            'bio' => 'Lagi males',
            'role' => 'superadmin',
            'password' => Hash::make('123456'),
        ]);
    }
}

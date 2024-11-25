<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Usuario',
            'lastname' => 'Admin',
            'email' => 'admin@example.com',
            'phone' => '1234567890',
            'password' => Hash::make('12345678'),
            'state' => 'activo',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    use WithoutModelEvents;


    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gitit-tech.com',
            'email_verified_at' => now(),
            'password' => Hash::make('nonstop'), // password
        ]);
    }

}

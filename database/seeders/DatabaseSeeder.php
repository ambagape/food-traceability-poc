<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(FarmSeeder::class);
        $this->call(PartySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(UserSeeder::class);

    }
}

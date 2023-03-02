<?php

namespace Database\Seeders;
use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TransactionSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Transaction::factory(10)
            ->create();
    }
}

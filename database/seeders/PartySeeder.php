<?php

namespace Database\Seeders;
use App\Models\Party;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PartySeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Party::factory(10)
            ->create();
    }
}

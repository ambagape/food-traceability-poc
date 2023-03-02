<?php

namespace Database\Seeders;
use App\Models\Farm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Farm::factory(10)
            ->create();
    }
}

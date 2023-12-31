<?php

namespace Database\Seeders;
use App\Models\Farm;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Product::factory(10)
            ->create();
    }
}

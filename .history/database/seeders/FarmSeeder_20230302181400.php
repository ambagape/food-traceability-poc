<?php

namespace Database\Seeders;
use App\Models\Farm;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class FarmSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Farm::factory(10)
            ->create();
    }
}

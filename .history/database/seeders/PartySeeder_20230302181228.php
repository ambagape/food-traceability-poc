<?php

namespace Database\Seeders;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PartySeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Tag::factory(10)
            ->create();
    }
}

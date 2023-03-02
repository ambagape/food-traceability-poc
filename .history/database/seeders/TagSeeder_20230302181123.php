
<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TagSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Tag::factory(10)
            ->create();
    }
}

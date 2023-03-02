
<?php

namespace Database\Seeders;


class TagSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Category::factory(10)
            ->create();
    }
}

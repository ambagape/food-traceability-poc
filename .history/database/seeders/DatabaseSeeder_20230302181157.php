<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TagSeeder::class);
        $this->call(SchoolSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(KnowledgeArticleSeeder::class);
    }
}

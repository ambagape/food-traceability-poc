<?php

namespace Database\Factories;

use App\Models\Party;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'lot_number' => fake()->randomNumber(),
            'description' => fake()->text(),
            'production_date' => fake()->date(),
            'expiry_date' => fake()->date(),
            'weight' => fake()->randomNumber(),
            'origin' => fake()->name(),
            'party_id' => Party::factory()->createOne()->id
        ];
    }
}

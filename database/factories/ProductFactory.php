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
        $foods = ['Orange','Apple', 'Yam', 'Grape'];
        $party = Party::factory()->createOne();
        return [
            'name' => $foods[fake()->numberBetween(0,3)],
            'lot_number' => fake()->randomNumber(),
            'description' => fake()->text(),
            'production_date' => fake()->date(),
            'expiry_date' => fake()->date(),
            'weight' => fake()->randomNumber(2, true),
            'origin' => $party->name,
            'party_id' => $party->id
        ];
    }
}

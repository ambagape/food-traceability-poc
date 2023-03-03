<?php

namespace Database\Factories;

use App\Models\Party;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class FarmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address' => fake()->streetAddress(),
            'longitude' => fake()->longitude(),
            'latitude' => fake()->latitude(),
            'party_id' => Party::factory()->createOne()->id,
        ];
    }
}

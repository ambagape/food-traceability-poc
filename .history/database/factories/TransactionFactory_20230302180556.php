<?php

namespace Database\Factories;

use App\Models\Party;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transporter_name' => fake()->name(),
            'transporter_phone' => fake()->phoneNumber(),
            'lot_number' => fake()->randomNumber(),
            'description' => fake()->text(),
            'production_date' => fake()->date(),
            'expiry_date' => fake()->date(),
            'weight' => fake()->randomNumber(),
            'origin' => fake()->name(),
            'party_id' => Party::factory()->createOne()->id,
            'product_id' => Product::factory()->createOne()->id,
            'supplier_id' => Product::factory()->createOne()->id,
            'tag_id' => Tag::factory()->createOne()->id,

            $table->foreignId('party_id')->constrained();
            $table->foreignId('tag_id')->constrained();
        ];
    }
}

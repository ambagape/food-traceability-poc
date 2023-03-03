<?php

namespace Database\Factories;

use App\Models\Party;
use App\Models\Product;
use App\Models\Tag;
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
        $tags = Tag::all();
        return [
            'transporter_name' => fake()->name(),
            'transporter_phone' => fake()->phoneNumber(),
            'party_id' => Party::factory()->createOne()->id,
            'product_id' => Product::factory()->createOne()->id,
            'supplier_id' => Party::factory()->createOne()->id,
            'tag_id' => $tags[fake()->numberBetween(0, $tags->count() - 1)]->id
        ];
    }
}

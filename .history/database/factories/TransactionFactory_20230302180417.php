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
            'party_id' => Party::factory()->createOne()->id

            $table->string('transporter_name');
            $table->string('transporter_phone');
            $table->foreignId('product_id')->constrained();
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('parties');
            $table->foreignId('party_id')->constrained();
            $table->foreignId('tag_id')->constrained();
        ];
    }
}

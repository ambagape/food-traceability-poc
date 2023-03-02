<?php

namespace Tests\Feature\Category;

use App\Models\Product;
use Tests\TestCase;

class ShowTest extends TestCase
{
    /** @test */
    public function it_should_get_a_product(): void
    {
        $products = Product::factory()->count(2)->create();

        $this->getJson(route('products.show', [$products[0]->id]))
            ->assertOk()
            ->assertJson([
                'data' => [
                    'id' => $products[0]->id,
                    'name' => $products[0]->name,
                    'description' => $products[0]->description,
                    'party' => ['id' => $products->party->id]
                ],
            ]);
    }
}

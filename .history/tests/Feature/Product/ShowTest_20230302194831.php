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
                    'id' => $cats[0]->id,
                    'name' => $cats[0]->name,
                    'description' => $cats[0]->description,
                ],
            ]);
    }
}

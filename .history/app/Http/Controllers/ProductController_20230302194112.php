<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    function show(Request $request, Product $product){
        $product->load(['party','party.tag']);
        ProductResource::make($product);
    }
}

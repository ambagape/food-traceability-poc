<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    function show(Request $request, Product $product){
        $product->load(['party','party.tag']);
        return ProductResource::make($product);
    }
}

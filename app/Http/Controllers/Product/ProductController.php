<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::with('user')->with('b_user')->findOrFail($id);
        return view('product.show')->with('product',$product);
    }
}

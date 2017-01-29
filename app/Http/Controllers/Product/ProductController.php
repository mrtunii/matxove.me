<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::with('user')->with('b_user')->with('category')->findOrFail($id);
        $similar_product =  Product::where('category_id',$product->category_id)->NotBorrowed()->take(4)->get();
        return view('product.show')->with('product',$product)->with('similar_products',$similar_product);
    }
}

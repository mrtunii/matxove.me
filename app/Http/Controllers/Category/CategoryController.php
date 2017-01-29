<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.list')->with('categories',Category::all());
    }

    public function single($id)
    {
        $category = Category::with('products')->findOrFail($id);
        return view('category.single')->with('category',$category);
    }
}

<?php

namespace App\Http\Controllers\Product;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function show($id)
    {

        $product = Product::with('user')->with('b_user')->with('category')->findOrFail($id);
        $similar_product =  Product::where('category_id',$product->category_id)->NotThis($id)->NotBorrowed()->take(4)->get();
        return view('product.show')->with('product',$product)->with('similar_products',$similar_product);
    }

    public function add()
    {
        $categories = Category::all();
        return view('product.add')->with('categories',$categories);
    }

    public function insert(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->user_id = Auth::user()->id;
        $product->category_id = $request->category_id;
        if($request->image != null){
            $imageName = uniqid() . '.' .
                $request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(
                base_path() . '/public/images/products/', $imageName
            );
            $final_name = '/images/products/'.$imageName;

            $product->main_image= $final_name;
        }


        try{
            $product->save();
            return redirect('/item/'.$product->id);
         } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}

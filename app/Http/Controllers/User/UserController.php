<?php

namespace App\Http\Controllers\User;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function myItems()
    {
        return view('user.myitems')->with('items');
    }

    public function returned($id)
    {
        $product = Product::findOrFail($id);
        if($product->user_id != Auth::user()->id) {
            return redirect('/');
        }

        $product->borrower_id = null;
        $product->borrow_date = Carbon::now();
        $product->status_id = 1;
        $product->update();
        return back();
    }
}

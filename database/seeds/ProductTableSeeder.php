<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product();
        $product->title = 'დრელი';
        $product->description = 'კარგი დრელია';
        $product->borrower_id = \App\Models\User::where('email','gio@gmail.com')->first()->id;
        $product->user_id = \App\Models\User::where('email','otarmames@gmail.com')->first()->id;
        $product->borrow_date = \Carbon\Carbon::now();
        $product->main_image = 'https://www.boschtools.com/us/en/ocsmedia/optimized/full/HDB180_Hero.png';
        $product->category_id = 1;
        $product->save();

        $product = new \App\Models\Product();
        $product->title = 'მეორე კარგი დრელი';
        $product->description = 'კარგი დრელია';
        $product->borrower_id = \App\Models\User::where('email','otarmames@gmail.com')->first()->id;
        $product->user_id = \App\Models\User::where('email','gio@gmail.com')->first()->id;
        $product->borrow_date = \Carbon\Carbon::now();
        $product->main_image = 'http://www.lampertlumber.com/wp-content/uploads/2015/03/Blog.png';
        $product->category_id = 1;
        $product->save();

    }
}

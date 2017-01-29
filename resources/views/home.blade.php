@extends('layouts.app')

@section('content')
    <div class="content-container animated fadeInUp">
        @if($last_products->count() > 0)
        <div class="page-block">
            <h2 class="block-title ninobold"><span>ახალი დამატებულები</span></h2>
            <ol class="product-list">
                @foreach($last_products as $product)
                <li class="ninonormal">
                    <div class="thumb"><a href="/item/{{ $product->id }}"><img src="{{ $product->image }}" alt=""></a></div>
                    <div class="product-ctn">
                        <div class="product-name"><a href="product.html">{{ $product->title }}</a></div>
                        <div class="price"><span style="color: #000">განათხოვრება </span><span class="price-current">{{ $product->day_count }}</span> <span style="color: #000"> დღით </span></div>
                    </div>
                </li>
                @endforeach

            </ol>
            <div class="clear"></div>
        </div>
        @endif
        <div class="page-block" style="margin-top: 5%;">
            <h2 class="block-title ninobold"><span>კატეგორიები</span></h2>
            <ol class="category-list">
                @foreach($categories as $category)
                <li style="border-radius: 100px;">
                    <div class="thumb"><a href="/category/{{ $category->id }}"><img src="{{ $category->logo }}" style="width: 160px; height: 160px; margin-left: 10%;"></a> </div>
                    <div class="category-ctn">
                        <div class="cat-name"><a href="product-list.html">{{ $category->name }}</a></div>
                    </div>
                </li>
                @endforeach
            </ol>
            <div class="clear"></div>
        </div>

    </div>
@endsection

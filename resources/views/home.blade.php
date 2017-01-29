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
                        <div class="price"><span class="price-before">$ 68.00</span><span class="price-current">$ 62.22</span></div>
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
                <li style="border-radius: 100px;">
                    <div class="thumb" style="border-radius: 50%;"><a href="product-list.html"><img src="https://cdn0.iconfinder.com/data/icons/tools-3/100/16-512.png" style="color: #ffffff" alt=""></a></div>

                </li>
                <li>
                    <div class="thumb"><a href="product-list.html"><img src="images/shop5.png" alt=""></a></div>
                    <div class="category-ctn">
                        <div class="cat-name"><a href="product-list.html">Otomotive</a></div>
                        <div class="cat-desc">Best choice for you, king of street</div>
                    </div>
                </li>
                <li>
                    <div class="thumb"><a href="product-list.html"><img src="images/2.jpg" alt=""></a></div>
                    <div class="category-ctn">
                        <div class="cat-name"><a href="product-list.html">Fashion</a></div>
                        <div class="cat-desc">Fullfill your style with only the best item</div>
                    </div>
                </li>
                <li>
                    <div class="thumb"><a href="product-list.html"><img src="images/shop9.jpg" alt=""></a></div>
                    <div class="category-ctn">
                        <div class="cat-name"><a href="product-list.html">Computer & Laptop</a></div>
                        <div class="cat-desc">High quality assistant for your job</div>
                    </div>
                </li>
            </ol>
            <div class="clear"></div>
        </div>

    </div>
@endsection

@extends('layouts.app')


@section('content')

    <div class="content-container">
        <h1 class="page-title animated fadeIn ninobold">{{ $category->name }}</h1>

        <ol class="product-list animated fadeInLeft">
            @foreach($category->products as $product)
            <li class="ninonormal">
                <div class="thumb"><a href="/item/{{ $product->id }}"><img src="{{ $product->image }}" alt=""></a></div>
                <div class="product-ctn">
                    <div class="product-name"><a href="product.html">{{ $product->title }}</a></div>
                    <div class="price"><span style="color: #000">განათხოვრება </span><span class="price-current">{{ $product->day_count }}</span> <span style="color: #000"> დღით </span></div>
                </div>
            </li>
            @endforeach
        </ol>
                <div class="clearfix"></div>
    </div>

@stop
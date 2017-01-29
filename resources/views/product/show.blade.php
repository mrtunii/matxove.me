@extends('layouts.app')


@section('content')

    <div class="content-container">
        <div class="content-header">
            <div class="breadcrumbs animated fadeIn"><a href="/">მთავარი</a><a href="/category/{{ $product->category->id }}" class="active">{{ $product->category->name }}</a></div>
            <h2 class="product-title animated fadeIn ninobold">{{ $product->title }}</h2>
            <div class="big-thumb"><img src="{{ $product->image }}" alt=""></div>
            <!-- You can also use static thumbnail (without slider) via HTML tag below <div class="big-thumb"><img src="/images/1.jpg" alt=""></div> -->
            <div class="product-meta animated fadeInUp ninobold">
                <div class="price"><span>მფლობელი: {{ $product->user->firstname }}  {{ $product->user->lastname }}</span></div>
                @if($product->status_id == config('custom.status.borrowed') && $product->borrower_id > 0)
                <div class="price"><span style="color: #F44336;">ითხოვა <a href="/user/{{ $product->borrower_id }}"> {{ $product->b_user->firstname }}  {{ $product->b_user->lastname }}</a> -მ(ა)</span></div>
                    @else
                    <div class="availability in-stock">ხელმსაწვდომია</div>

                    <div class="availability in-stock">დაბრუნების დრო: {{ \Carbon\Carbon::now()->addDay($product->day_count)->toDateString() }}</div>

                    <div>მობილური: <a href="callto:{{ $product->user->mobile }}">{{ $product->user->mobile }}</a></div>

                    <div>მისამართი: {{ $product->user->address }}</div>


                @endif

            </div>
        </div>
        <div class="product-tabs">
            <ul class="tabs ninobold">
                <li class="tab"><a class="active" href="#detail">დეტალები</a></li>
            </ul>
        </div>
        <div class="product-content">
            <div class="tab-content" id="detail">
                {!! $product->description !!}
            </div>
        </div>
        @if($product->status_id != config('custom.status.borrowed') && ($product->borrower_id == null || $product->borrower_id == 0))
        <div class="product-action margin-bottom ninobold"><h2><a class="btn green btn-block margin-bottom_low" href="#" onclick="alert('More Functions Coming Soon')"> მათხოვე </a></h2></div>

        <div class="product-share"><a href="#" class="fb"><i class="fa fa-facebook"></i></a><a href="#" class="tw"><i class="fa fa-twitter"></i></a><a href="#" class="gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="pint"><i class="fa fa-pinterest"></i></a></div>
        @endif
        <div class="line"></div>
        @if($similar_products->count() > 0)
        <div class="page-block">
            <h2 class="block-title ninobold"><span>შეიძლება დაგაინტერესოთ</span></h2>
            <ol class="product-list">
                @foreach($similar_products as $item)
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
    </div>

@stop
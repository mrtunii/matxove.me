@extends('layouts.app')


@section('content')

    <div class="content-container animated fadeInUp">

        <div class="page-block" style="margin-top: 5%;">
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

@stop
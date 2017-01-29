@extends('layouts.app')


@section('content')


    <div class="content-container">
        <h1 class="page-title ninobold">ჩემი ნივთები</h1>
        <ul class="collapsible order-history" data-collapsible="accordion">

        @foreach(Auth::user()->products as $product)
            <li class="ninonormal">
                <div class="collapsible-header">
                    <span class=" fa fa-caret-right">{{ $product->title }}</span>
                    @if($product->status_id == config('custom.status.borrowed'))
                    <div class="order-status"><a href="/item/{{ $product->id }}/returned" style="color:green">დაბრუნებულია <span class="fa fa-check"></span> </a> </div>
                    @endif
                    @if($product->status_id == config('custom.status.borrowed'))
                    <div class="order-no"><span style="color: red;"><span class="fa fa-ban"></span></span> </div>
                        @else
                        <div class="order-no"><span style="color: green;"><span class="fa fa-check"></span></span> </div>
                    @endif
                </div>
                <div class="collapsible-body">
                    <ol>
                        <li>
                            <div class="thumb"><img src="{{ $product->image }}" alt=""></div>
                            <div class="ctn">
                                <h3>{{ $product->title }}</h3>
                                <p><a href="/item/{{ $product->id }}" class="track-order">ნახვა</a></p>
                            </div>
                        </li>
                    </ol>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

@stop
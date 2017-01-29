<div id="slide-out-right" class="side-nav">
    <div class="sidebar-tabs">
        <ul class="tabs">
            <li class="tab"><a class="active ninobold badge1" data-badge="9" href="#yourcart" >სხვისი</a></li>
            <li class="tab"><a class="ninobold" href="#latestblog">ჩემი</a></li>
        </ul>
    </div>
    <div class="sidebar-tabs_content">
        <div id="yourcart">
            <ol class="cart-item">
                @foreach(Auth::user()->borrowed_products as $product)
                    <li>
                        <div class="thumb"><img src="{{ $product->image }}" alt=""></div>
                        <div class="cart-delete"><a href="#"><i class="fa fa-times"></i></a></div>
                        <div class="cart-detail">
                            <h3 class="product-name"><a href="/item/{{ $product->id }}">{{ $product->title }}</a></h3>
                            <div class="price"><span>დაბრუნება</span> {{ $product->returndate }}</div>
                        </div>
                    </li>
                @endforeach

            </ol>

        </div>
        <div id="latestblog">
            <ol class="cart-item">
                @foreach(Auth::user()->products()->isborrowed()->get() as $product)
                    <li>
                        <div class="thumb"><img src="{{ $product->image }}" alt=""></div>
                        <div class="cart-delete"><a href="#"><i class="fa fa-times"></i></a></div>
                        <div class="cart-detail">
                            <h3 class="product-name"><a href="/item/{{ $product->id }}">{{ $product->title }}</a></h3>
                            <div class="price"><span>დაბრუნება</span> {{ $product->returndate }}</div>
                            <div class="price"><span>{{ $product->b_user->firstname.' '.$product->b_user->lastname }}</span></div>
                        </div>
                    </li>
                @endforeach

            </ol>
        </div>
    </div>
</div>
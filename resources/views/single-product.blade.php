@extends("layouts.main")
@section("title")
    product page-
@endsection
@section("price")
    $100
@endsection
@section("navbarList")
    <li><a href="{{url("/")}}">Home</a></li>
    <li><a href="{{url("/shop")}}">Shop page</a></li>
    <li class="active"><a href="{{url("/single-product")}}">Single product</a></li>
    <li><a href="{{url("/cart")}}">Cart</a></li>
    <li><a href="{{url("/checkout")}}">Checkout</a></li>
    <li><a href="#">Category</a></li>
    <li><a href="#">Others</a></li>
    <li><a href="#">Contact</a></li>
@endsection
@section("diffArea")
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>

                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Products</h2>
                            @foreach($products as $product)
                            <div class="thubmnail-recent">
                                <img src="{{asset("img/product-thumb-1.jpg")}}" class="recent-thumb" alt="">
                                <h2><a href="">{{$product->product_name}}</a></h2>
                                <div class="product-sidebar-price">
                                    <ins>{{$product->product_price}}</ins>
                                    <del>$100.00</del>

                                    <form action="{{url("cart/add")}}" method="post">
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <button type="submit" class="btn-default add_to_cart_button">add to cart</button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                            {{--<div class="thubmnail-recent">--}}
                                {{--<img src="{{asset("img/product-thumb-1.jpg")}}" class="recent-thumb" alt="">--}}
                                {{--<h2><a href="">Sony Smart TV - 2015</a></h2>--}}
                                {{--<div class="product-sidebar-price">--}}
                                    {{--<ins>$700.00</ins>--}}
                                    {{--<del>$100.00</del>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="thubmnail-recent">--}}
                                {{--<img src="{{asset("img/product-thumb-1.jpg")}}" class="recent-thumb" alt="">--}}
                                {{--<h2><a href="">Sony Smart TV - 2015</a></h2>--}}
                                {{--<div class="product-sidebar-price">--}}
                                    {{--<ins>$700.00</ins>--}}
                                    {{--<del>$100.00</del>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="thubmnail-recent">--}}
                                {{--<img src="{{asset("img/product-thumb-1.jpg")}}" class="recent-thumb" alt="">--}}
                                {{--<h2><a href="">Sony Smart TV - 2015</a></h2>--}}
                                {{--<div class="product-sidebar-price">--}}
                                    {{--<ins>$700.00</ins>--}}
                                    {{--<del>$100.00</del>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>

                </div>

            </div>
        </div>
    </div>

@endsection
@section("scriptAppendArea")
    {{--主板皆有 不用新增--}}
@endsection
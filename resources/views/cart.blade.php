@extends("layouts.main")
@section("title")
    Cart Page -
@endsection

@section("price")
    $100
@endsection

@section("navbarList")
    <li><a href="{{url("/")}}">Home</a></li>
    <li><a href="{{url("/shop")}}">Shop page</a></li>
    <li><a href="{{url("/single-product")}}">Single product</a></li>
    <li class="active"><a href="{{url("/cart")}}">Cart</a></li>
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
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="#">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <div class="thubmnail-recent">
                            <img src="{{asset("img/product-thumb-1.jpg")}}" class="recent-thumb" alt="">
                            <h2><a href="{{url("/single-product")}}">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins>
                                <del>$800.00</del>
                            </div>
                        </div>
                        <div class="thubmnail-recent">
                            <img src="{{asset("img/product-thumb-1.jpg")}}" class="recent-thumb" alt="">
                            <h2><a href="{{url("/single-product")}}">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins>
                                <del>$800.00</del>
                            </div>
                        </div>
                        <div class="thubmnail-recent">
                            <img src="{{asset("img/product-thumb-1.jpg")}}" class="recent-thumb" alt="">
                            <h2><a href="{{url("/single-product")}}">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins>
                                <del>$800.00</del>
                            </div>
                        </div>
                        <div class="thubmnail-recent">
                            <img src="{{asset("img/product-thumb-1.jpg")}}" class="recent-thumb" alt="">
                            <h2><a href="{{url("/single-product")}}">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins>
                                <del>$800.00</del>
                            </div>
                        </div>
                    </div>

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a title="Remove this item" class="remove" href="#">×</a>
                                        </td>

                                        <td class="product-thumbnail">
                                            <a href="{{url("/single-product")}}"><img width="145" height="145"
                                                                                      alt="poster_1_up" class="shop_thumbnail"
                                                                                      src="{{asset("img/product-thumb-2.jpg")}}"></a>
                                        </td>

                                        <td class="product-name">
                                            <a href="{{url("/single-product")}}">Ship Your Idea</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="amount">£15.00</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="quantity buttons_added">
                                                <input type="button" class="minus" value="-">
                                                <input type="number" size="4" class="input-text qty text" title="Qty"
                                                       value="1" min="0" step="1">
                                                <input type="button" class="plus" value="+">
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="amount">£15.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="actions" colspan="6">
                                            <div class="coupon">
                                                <label for="coupon_code">Coupon:</label>
                                                <input type="text" placeholder="Coupon code" value="" id="coupon_code"
                                                       class="input-text" name="coupon_code">
                                                <input type="submit" value="Apply Coupon" name="apply_coupon"
                                                       class="button">
                                            </div>
                                            <input type="submit" value="Update Cart" name="update_cart" class="button">
                                            <input type="submit" value="Checkout" name="proceed"
                                                   class="checkout-button button alt wc-forward">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">


                                <div class="cross-sells">
                                    <h2>You may be interested in...</h2>
                                    <ul class="products">
                                        <li class="product">
                                            <a href="{{url("/single-product")}}">
                                                <img width="325" height="325" alt="T_4_front"
                                                     class="attachment-shop_catalog wp-post-image"
                                                     src="{{asset("img/product-2.jpg")}}">
                                                <h3>Ship Your Idea</h3>
                                                <span class="price"><span class="amount">£20.00</span></span>
                                            </a>

                                            <a class="add_to_cart_button" data-quantity="1" data-product_sku=""
                                               data-product_id="22" rel="nofollow" href="{{url("/single-product")}}">Select
                                                options</a>
                                        </li>

                                        <li class="product">
                                            <a href="{{url("/single-product")}}">
                                                <img width="325" height="325" alt="T_4_front"
                                                     class="attachment-shop_catalog wp-post-image"
                                                     src="{{asset("img/product-4.jpg")}}">
                                                <h3>Ship Your Idea</h3>
                                                <span class="price"><span class="amount">£20.00</span></span>
                                            </a>

                                            <a class="add_to_cart_button" data-quantity="1" data-product_sku=""
                                               data-product_id="22" rel="nofollow" href="{{url("/single-product")}}">Select
                                                options</a>
                                        </li>
                                    </ul>
                                </div>


                                <div class="cart_totals ">
                                    <h2>Cart Totals</h2>

                                    <table cellspacing="0">
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">£15.00</span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">£15.00</span></strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <form method="post" action="#" class="shipping_calculator">
                                    <h2><a class="shipping-calculator-button" data-toggle="collapse"
                                           href="#calcalute-shipping-wrap" aria-expanded="false"
                                           aria-controls="calcalute-shipping-wrap">Calculate Shipping</a></h2>

                                    <section id="calcalute-shipping-wrap" class="shipping-calculator-form collapse">

                                        <p class="form-row form-row-wide">
                                            <select rel="calc_shipping_state" class="country_to_state"
                                                    id="calc_shipping_country" name="calc_shipping_country">
                                                @include("parts.countriesOptions")
                                            </select>
                                        </p>

                                        <p class="form-row form-row-wide"><input type="text" id="calc_shipping_state"
                                                                                 name="calc_shipping_state"
                                                                                 placeholder="State / county" value=""
                                                                                 class="input-text"></p>

                                        <p class="form-row form-row-wide"><input type="text" id="calc_shipping_postcode"
                                                                                 name="calc_shipping_postcode"
                                                                                 placeholder="Postcode / Zip" value=""
                                                                                 class="input-text"></p>


                                        <p>
                                            <button class="button" value="1" name="calc_shipping" type="submit">Update
                                                Totals
                                            </button>
                                        </p>

                                    </section>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("scriptAppendArea")
    <!-- Slider -->
    <script type="text/javascript" src="{{asset("js/bxslider.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/script.slider.js")}}"></script>
@endsection
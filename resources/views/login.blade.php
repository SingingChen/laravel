@extends("layouts.main")
@section("title")
    test
@endsection

@section("price")
    $100
@endsection

@section("diffArea")

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Login / Sign up</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <div class="woocommerce-info">Returning customer? login below.</div>

                            <form id="login-form-wrap" class="" method="post" action="{{url("/auth/login")}}">{{csrf_field()}}
{{--防跨站攻擊--}}

                                <p class="form-row form-row-first">
                                    <label for="username">Username or email <span class="required">*</span>
                                    </label>
                                    <input type="text" id="username" name="username" class="input-text">
                                </p>
                                <p class="form-row form-row-last">
                                    <label for="password">Password <span class="required">*</span>
                                    </label>
                                    <input type="password" id="password" name="password" class="input-text">
                                </p>
                                <div class="clear"></div>


                                <p class="form-row">
                                    <input type="submit" value="Login" name="login" class="button">
                                    <!--
                                                                    <label class="inline" for="rememberme"><input type="checkbox" value="forever"
                                                                                                                  id="rememberme" name="rememberme">
                                                                        Remember me </label>
                                    -->
                                </p>
                                <!--
                                                            <p class="lost_password">
                                                                <a href="#">Lost your password?</a>
                                                            </p>
                                -->

                                <div class="clear"></div>
                            </form>

                            <div class="woocommerce-info">New coustomr? sign up below.</div>

                            <form id="login-form-wrap" class="" method="post" action="{{url("signup")}}">
                                {{csrf_field()}}


                                <p class="form-row form-row-first">
                                    <label for="username">Username<span class="required">*</span>
                                    </label>
                                    <input type="text" id="username" name="username" class="input-text">
                                </p>
                                <p class="form-row form-row-first">
                                    <label for="Email">Email<span class="required">*</span>
                                    </label>
                                    <input type="email" id="email" name="email" class="input-text">
                                </p>
                                <p class="form-row form-row-last">
                                    <label for="password">Password <span class="required">*</span>
                                    </label>
                                    <input type="password" id="password" name="password" class="input-text">
                                </p>
                                <div class="clear"></div>


                                <p class="form-row">
                                    <input type="submit" value="Submit" name="login" class="button">
                                    <a href="{{url('fb_redirect')}}"><input type="button" value="Login with facebook" class="button"></a>

                                    <!--
                                                                    <label class="inline" for="rememberme"><input type="checkbox" value="forever"
                                                                                                                  id="rememberme" name="rememberme">
                                                                        Remember me </label>
                                    -->
                                </p>
                                <!--
                                                            <p class="lost_password">
                                                                                            <a href="#">Lost your password?</a>
                            </p>
-->

                                <div class="clear"></div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
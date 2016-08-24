<?php

namespace App\Http\Controllers;

use \App\Product;
use Request;
use Auth;
use Socialite;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;

class firstController extends Controller
{
    //在這新增路由方法
    var $products;
    var $categories;
    var $brands;

    public function __construct()
    {
        $this->products = \App\Product::all(["id", "product_name", "product_price"]);
        $this->categories = \App\Category::all(["id", "category_name"]);
        $this->brands = \App\Brand::all(["id", "brand_name"]);
    }

    public function shop()
    {
        return view("shop", ["title" => "shopping", "description" => " 網頁說明", "products" => $this->products, "categories" => $this->categories]);
    }

    public function checkout()
    {
        return view("checkout", ["title" => "checkout", "description" => " 網頁說明", "products" => $this->products, "categories" => $this->categories]);
    }

    public function single_product()
    {
        return view("single-product", ["title" => "single-product", "description" => " 網頁說明", "products" => $this->products, "categories" => $this->categories]);
    }

    public function cart(Request $request)
    {
        if (Request::isMethod('post')) {
            $product_id = Request::get('product_id');
            $product = \App\Product::find($product_id);
            Cart::add(array('id' => $product_id, 'name' => $product->product_name, 'price' => $product->product_price, 'qty' => 1));
        }
        if (Request::get("product_id") && (Request::get("add") == 1)) {
            $items = Cart::Search(function ($cartItem, $rowId) {
                return $cartItem->id == Request::get("product_id");
            });
            Cart::update($items->first()->rowId, $items->first()->qty + 1);
        }
        if (Request::get("product_id") && (Request::get("minus") == 1)) {
            $items = Cart::Search(function ($cartItem, $rowId) {
                return $cartItem->id == Request::get("product_id");
            });
            Cart::update($items->first()->rowId, $items->first()->qty - 1);
        }
        if (Request::get("product_id") && (Request::get("clear") == 1)) {
            $items = Cart::Search(function ($cartItem, $rowId) {
                return $cartItem->id == Request::get("product_id");
            });
            Cart::remove($items->first()->rowId);
        }
        $cart = Cart::content();
        return view("cart", ["title" => "cart", "description" => " 網頁說明", "cart" => $cart]);
//        return view("cart", ["title" => "cart", "description" => " 網頁說明", "products" => $this->products, "categories" => $this->categories]);

//
//        if (session()->has('cart_from_server')){
//            $cart =session("cart_from_server");
//        return view("cart", ["title" => "cart", "description" => " 網頁說明", "cart" => $cart]);
//        }else{
//            $cart=array();
//        return view("cart", ["title" => "cart", "description" => " 網頁說明","cart" => $cart]);
//        }
    }

    public function cart_add(Request $request)
    {
        $product_id = Request::get("product_id");
        $product = \App\Product::find($product_id);

        Cart::add(["id" => $product_id,
            "name" => $product->product_name,
            "qty" => 1,
            "price" => $product->product_price]);
        $cart = Cart::content();

//        return view("cart",["cart"=>$cart,"title"=>"Cart","description"=>"網頁說明"]);
        return Redirect("cart")->with("cart_from_server", $cart);
    }

    public function clear_cart()
    {
        Cart::destroy();
        return Redirect("cart");
    }

    public function login()
    {
        return view("login", ["title" => "login", "description" => " 登入頁面"]);
    }

    public function register()
    {
        if (Request::isMethod('post')) {
            \App\User::create([
                'name' => Requests::get('name'),
                'email' => Requests::get('email'),
                'password' => Requests::get('password'),
            ]);
            return redirect("login");
        }
    }

    public function auth_login()
    {
        if (Auth::attempt(["email" => Request::get("email"), "password" => Request::get("password")])) {
            return redirect()->to("/");
        } else {
            return redirect()->to("/login");
        }

    }

    public function signup()
    {
//新增使用者置資料庫
        \App\User::create([
            'name' => Request::get("userName"),
            'email' => Request::get("email"),
            //Auth middleware預設使用bcrypt加密驗證，所以如果一開始寫入資料庫時未加密，後續使用Auth驗證密碼時會不一致
            'password' => bcrypt(Request::get('password')),
        ]);
        return redirect("/login");
    }

    public function auth_logout()
    {
Auth::logout();
        return redirect("/");
    }

    public function fb_redirect(){
        //進行facebook登入驗證
return Socialite::driver('facebook')->redirect();
    }

    public function fb_callback(){
return"i'm back!!";
    }

    public function index()
    {
//        $product = new \App\Brand();
//        $product->brand_name="testHello~~~";
//        $product->save();
//        Product::create(["product_name"=>"這是CONTROLLER"]);
        return view("index", ["title" => "home", "description" => " 網頁說明", "products" => $this->products, "categories" => $this->categories]);
    }
}

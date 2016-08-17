<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use ShoppingCart;
use App\Http\Requests;

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

    public function cart()
    {
        return view("cart", ["title" => "cart", "description" => " 網頁說明", "products" => $this->products, "categories" => $this->categories]);
    }

    public function cart_add(Request $request)
    {
        $product_id = $request->get("product_id");
        $product = \App\Product::find($product_id);

        ShoppingCart::add(["id" => $product_id,
            "name" => $product->product_name,
            "qty" => 1,
            "price" => $product->product_price]);
        $cart=ShoppingCart::content();

        return view("cart",["cart"=>$cart,"title"=>"Cart","description"=>"網頁說明"]);
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

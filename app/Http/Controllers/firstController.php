<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class firstController extends Controller
{
    //在這新增路由方法
    var $products;
    var $categories;
    var $brands;
    public function __construct()
    {
        $this->products=\App\Product::all(["id","product_name","product_price"]);
        $this->categories=\App\Category::all(["id","category_name"]);
        $this->brands=\App\Brand::all(["id","brand_name"]);
    }

    public function shop()
    {
        return view("shop");
    }
    public  function checkout()
    {
        return view("checkout");
    }
    public function single_product()
    {
    return view("single-product");
    }
    public function cart(){
        return view("cart");
    }

    public function index()
    {
//        $product = new \App\Brand();
//        $product->brand_name="testHello~~~";
//        $product->save();
//        Product::create(["product_name"=>"這是CONTROLLER"]);
        return view("index",["title"=>"home","description" =>" 網頁說明","products"=>$this->products,"categories"=>$this->categories]);
    }
}

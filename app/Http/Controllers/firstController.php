<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class firstController extends Controller
{
    public function index()
    {
        return "首頁";
    }
    public function contact_us()
{
    return"聯絡我們";
}
    public function login()
    {
        return"登入";
    }
    public function logout()
    {
        return"登出";
    }
    public function products()
    {
        return"商品";
    }
    public function products_category()
    {
        return"商品分類";
    }
    public function products_brand()
    {
        return"品牌";
    }
    public function products_detail()
    {
        return"商品描述";
    }
    public function search()
    {
        return"搜尋";
    }
 public function cart()
    {
        return"購物車";
    }
 public function checkout()
    {
        return"結帳";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class firstController extends Controller
{
    //在這新增路由方法
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

    public function index()
    {
        return view("index");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class firstController extends Controller
{
    //        return "myResourceController - index()~~~";

    public function index()
    {
        return view("myView",["from_server" => "hello~"]);
    }



}

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route:: get('/',"firstController@index");
Route:: get('/shop',"firstController@shop");
Route:: get('/single-product',"firstController@single_product");
Route:: get('/cart',"firstController@cart");
Route:: get('/checkout',"firstController@checkout");
Route:: get('/contact_us',"firstController@contact_us");
Route:: get('/login',"firstController@login");
Route:: get('/logout',"firstController@logout");


//Route:: get("/show /{name}","firstResoueceController @show");



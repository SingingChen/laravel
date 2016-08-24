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

use \App\Product as P;

Route:: get('/',"firstController@index");
Route:: get('/shop',"firstController@shop");
Route:: get('/single-product',"firstController@single_product");
Route:: get('/cart',"firstController@cart");
Route:: post('/cart',"firstController@cart");
Route::post("/cart/add","firstController@cart_add");


//加入middleware驗證路由，有登入才能進入指定的controller方法，沒登入則導向至login頁面
Route:: get('/checkout',["middleware" =>"Auth" ,"uses" => "firstController@checkout"]);

Route:: get('/contact_us',"firstController@contact_us");
Route::post('/signup' ,"firstController@signup");
Route:: get('/auth/logout',"firstController@auth_logout");
Route::post("/auth/login", "firstController@auth_login");

Route::get("/login", "firstController@login");
Route::get('/fb_redirect',"firstController@fb_redirect");
Route::get('/fb_callback',"firstController@fb_callback");



Route::get(' /test/write',function(){
    //建立一個實體$product  繼承Product
   $product=P();

$product->create(["product_name"=>"singing","product_title"=>"singing2"]);
});

Route::get(' /test/read',function(){
   $product=new P();
    $product_datas=$product->all();
    foreach($product_datas as $product_data){
        echo"$product_data->id,$product_data->product_name,$product_data->product_title<br>";
    }
});
Route::get(' /test/update',function(){
    //不用新增 New   ::為靜態方法 使用在BaseModel中方法
    $product=\App\Product::find(10);
    $product->product_name="測試更新";
    $product->save();

    return redirect("/test/read");
});

Route::get(' /test/delete/{id}',function($id){

    $product=\App\Product::find($id);
    $product->delete();
    return redirect("/test/read");

});

Route::get(' /test/categorywrite',function(){

    $category=new \App\Category();

    $category->create(["category_name"=>"singing","create_now"=>"Now"]);
});
Route::get('/clear_cart',"firstController@clear_cart");
//Route:: get("/show /{name}","firstResoueceController @show");


//註解掉Auth功能預設的首頁和登入頁，以使用自定義的頁面
//Route::auth();

//Route::get('/home', 'HomeController@index');

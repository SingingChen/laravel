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

Route:: get('/checkout',"firstController@checkout");
Route:: get('/contact_us',"firstController@contact_us");
Route:: get('/login',"firstController@login");
Route:: get('/logout',"firstController@logout");

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
//Route:: get("/show /{name}","firstResoueceController @show");



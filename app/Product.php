<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends BaseModel
{   //選取mysql資料表名稱  原本預設找products
    protected $table="product";
    //設定索引鍵
    protected  $primaryKey="id";
    //拿掉時間戳記 必須是public
    public $timestamps=false;

    protected $fillable=["product_name","product_title"];
}

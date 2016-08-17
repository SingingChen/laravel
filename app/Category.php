<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends  BaseModel
{
    protected $table="category";
    protected $fillable=["category_name"];

}

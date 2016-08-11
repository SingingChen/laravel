<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string("product_name",60)->unique;//名稱
            $table->string("product_title",60);//標題
            $table->string("product_caption");
            $table->integer("product_price");
            $table->unsignedInteger("product_category_id");
            $table->unsignedInteger("product_brand_id");
            $table->timestamps();
            $table->string("IP");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product');
    }
}

c<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake_data=Faker\Factory::create("zh_TW");
        $name=["手機","平板","筆電"];
//        $price=[8888,9999,11111,22222];

        for($i=0;$i<30;$i++){
            $no = $fake_data->ean8;
            $product_name=$name[$fake_data->numberBetween(0,2)];
            DB::table("product")->insert(
                [
                    "product_name"=>"$product_name-$no",
                    "product_title"=>"$product_name-$no",
                    "product_caption"=>$fake_data->realText(200),
                    "product_price"=>$fake_data->numberBetween(8888,12000),
                    "product_category_id"=>1,
                    "product_brand_id"=>1,
                    "created_at"=>$fake_data->date("Y-m-d","now"),
                    "updated_at"=>$fake_data->date("Y-m-d","now"),
                    "IP"=>$fake_data->ipv4,
                ]
            );


        }
    }
}

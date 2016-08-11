<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("category")->truncate();
       $fake_data=Faker\Factory::create("zh_TW");
        $name=["手機","平板","筆電"];
//        $price=[8888,9999,11111,22222];
        for($i=0;$i<3;$i++) {
//            $no = $fake_data->ean8;
            $product_and_category_id = $fake_data->numberBetween(0, 2);
//            $product_name = $name[$product_and_category_id];
            DB::table("category")->insert(
                [
                    "category_name" => $name[$i],
                    "created_at" => $fake_data->date("Y-m-d", "now"),
                    "updated_at" => $fake_data->date("Y-m-d", "now"),
                    "IP" => $fake_data->ipv4,
                ]
            );

        }    }
}

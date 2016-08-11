<?php

use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake_data=Faker\Factory::create("zh_TW");
        $name=["Samsung","Apple","Sony","HTC","Hawei"];
        for($i=0;$i<count($name);$i++){
            DB::table("brands")->insert(
              [
               "brand_name"=>$name[$i],
                  "created_at"=>$fake_data->date("Y-m-d","now"),
                  "updated_at"=>$fake_data->date("Y-m-d","now"),
                  "IP"=>$fake_data->ipv4,


              ]

            );
        }
    }
}

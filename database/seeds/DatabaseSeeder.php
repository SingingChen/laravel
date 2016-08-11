<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->truncate();
        DB::table("categories")->truncate();
        DB::table("brands")->truncate();

        $this->call(ProductSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BrandsSeeder::class);
    }
}

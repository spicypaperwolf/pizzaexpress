<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
//        DB::table('users')->insert([
//        	'name' => str_random(10),
//        	'email' => str_random(10).'@gmail.com',
//        	'password' => bcrypt('matkhau'),
//        ]);
        //insert data to product_cat
        $this->call(product_cat_table_data_seeder::class);

        //insert data to products
        $this->call(products_table_data_seeder::class);


    }
}

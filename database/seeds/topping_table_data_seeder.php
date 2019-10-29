<?php

use Illuminate\Database\Seeder;

class topping_table_data_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topping')->insert([
            'top_name' => 'S',
            'top_price' => '0',
        ]);

        DB::table('topping')->insert([
            'top_name' => 'M',
            'top_price' => '2',
        ]);

        DB::table('topping')->insert([
            'top_name' => 'L',
            'top_price' => '2',
        ]);

        DB::table('topping')->insert([
            'top_name' => 'Cheese',
            'top_price' => '3',
        ]);

        DB::table('topping')->insert([
            'top_name' => 'Crust',
            'top_price' => '3',
        ]);
    }
}

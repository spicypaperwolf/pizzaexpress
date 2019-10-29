<?php

use Illuminate\Database\Seeder;

class slider_table_data_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider')->insert([
           'slider_name' => 'slide1',
            'slider_link' => '',
        ]);

        DB::table('slider')->insert([
            'slider_name' => 'slide2',
            'slider_link' => '',
        ]);

        DB::table('slider')->insert([
            'slider_name' => 'slide3',
            'slider_link' => '',
        ]);

        DB::table('slider')->insert([
            'slider_name' => 'slide4',
            'slider_link' => '',
        ]);
    }
}

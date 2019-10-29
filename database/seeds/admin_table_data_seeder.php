<?php

use Illuminate\Database\Seeder;

class admin_table_data_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'admin_email' => '777destinies@gmail.com',
            'admin_username' => 'admin',
            'admin_password' => '12345',
            'admin_function' => 'Administrator'
        ]);

        DB::table('admin')->insert([
            'admin_email' => 'nhoc.xitrum@yahoo.com',
            'admin_username' => 'admin123',
            'admin_password' => '12345',
            'admin_function' => 'Administrator'
        ]);
    }
}

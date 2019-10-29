<?php

use Illuminate\Database\Seeder;

class product_cat_table_data_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_cat')->insert([
           'cat_name' => 'Pizza',
            'cat_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'cat_img' => 'pizza_cat'
        ]);

        DB::table('product_cat')->insert([
            'cat_name' => 'Pasta',
            'cat_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'cat_img' => 'pasta_cat'
        ]);

        DB::table('product_cat')->insert([
            'cat_name' => 'Drink',
            'cat_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'cat_img' => 'drink_cat'
        ]);

        DB::table('product_cat')->insert([
            'cat_name' => 'Others',
            'cat_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'cat_img' => 'other_cat'
        ]);
    }
}

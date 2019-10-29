<?php

use Illuminate\Database\Seeder;

class products_table_data_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'prod_name' => 'Pizza 1',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '80',
            'prod_promoPrice' => '70',
            'prod_img' => 'pizza1',
            'prod_unit' => 'Box',
            'cat_id' => '1'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pizza 2',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '120',
            'prod_promoPrice' => '0',
            'prod_img' => 'pizza2',
            'prod_unit' => 'Box',
            'cat_id' => '1'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pizza 3',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '90',
            'prod_promoPrice' => '0',
            'prod_img' => 'pizza3',
            'prod_unit' => 'Box',
            'cat_id' => '1'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pizza 4',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '70',
            'prod_promoPrice' => '0',
            'prod_img' => 'pizza4',
            'prod_unit' => 'Box',
            'cat_id' => '1'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pizza 5',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '110',
            'prod_promoPrice' => '100',
            'prod_img' => 'pizza5',
            'prod_unit' => 'Box',
            'cat_id' => '1'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pizza 6',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '80',
            'prod_promoPrice' => '0',
            'prod_img' => 'pizza6',
            'prod_unit' => 'Box',
            'cat_id' => '1'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pizza 7',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '120',
            'prod_promoPrice' => '70',
            'prod_img' => 'pizza7',
            'prod_unit' => 'Box',
            'cat_id' => '1'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pizza 8',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '85',
            'prod_promoPrice' => '0',
            'prod_img' => 'pizza8',
            'prod_unit' => 'Box',
            'cat_id' => '1'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pasta 1',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '85',
            'prod_promoPrice' => '0',
            'prod_img' => 'pasta1',
            'prod_unit' => 'Dish',
            'cat_id' => '2'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pasta 2',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '95',
            'prod_promoPrice' => '0',
            'prod_img' => 'pasta2',
            'prod_unit' => 'Dish',
            'cat_id' => '2'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pasta 3',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '125',
            'prod_promoPrice' => '90',
            'prod_img' => 'pasta3',
            'prod_unit' => 'Dish',
            'cat_id' => '2'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pasta 4',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '70',
            'prod_promoPrice' => '0',
            'prod_img' => 'pasta4',
            'prod_unit' => 'Dish',
            'cat_id' => '2'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pasta 5',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '65',
            'prod_promoPrice' => '0',
            'prod_img' => 'pasta5',
            'prod_unit' => 'Dish',
            'cat_id' => '2'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pasta 6',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '90',
            'prod_promoPrice' => '0',
            'prod_img' => 'pasta6',
            'prod_unit' => 'Dish',
            'cat_id' => '2'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pasta 7',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '95',
            'prod_promoPrice' => '60',
            'prod_img' => 'pasta7',
            'prod_unit' => 'Dish',
            'cat_id' => '2'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Pasta 8',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '85',
            'prod_promoPrice' => '80',
            'prod_img' => 'pasta8',
            'prod_unit' => 'Dish',
            'cat_id' => '2'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Drink 1',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '20',
            'prod_promoPrice' => '0',
            'prod_img' => 'drink1',
            'prod_unit' => 'Bottle',
            'cat_id' => '3'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Drink 2',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '22',
            'prod_promoPrice' => '0',
            'prod_img' => 'drink2',
            'prod_unit' => 'Bottle',
            'cat_id' => '3'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Drink 3',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '15',
            'prod_promoPrice' => '0',
            'prod_img' => 'drink3',
            'prod_unit' => 'Bottle',
            'cat_id' => '3'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Drink 4',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '10',
            'prod_promoPrice' => '0',
            'prod_img' => 'drink4',
            'prod_unit' => 'Bottle',
            'cat_id' => '3'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Drink 5',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '14',
            'prod_promoPrice' => '0',
            'prod_img' => 'drink5',
            'prod_unit' => 'Bottle',
            'cat_id' => '3'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Drink 6',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '19',
            'prod_promoPrice' => '0',
            'prod_img' => 'drink6',
            'prod_unit' => 'Bottle',
            'cat_id' => '3'
        ]);


        DB::table('products')->insert([
            'prod_name' => 'Other 1',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '40',
            'prod_promoPrice' => '0',
            'prod_img' => 'other1',
            'prod_unit' => 'Pack',
            'cat_id' => '4'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Other 2',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '45',
            'prod_promoPrice' => '0',
            'prod_img' => 'other2',
            'prod_unit' => 'Pack',
            'cat_id' => '4'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Other 3',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '30',
            'prod_promoPrice' => '0',
            'prod_img' => 'other3',
            'prod_unit' => 'Pack',
            'cat_id' => '4'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Other 4',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '25',
            'prod_promoPrice' => '0',
            'prod_img' => 'other4',
            'prod_unit' => 'Pack',
            'cat_id' => '4'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Other 5',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '25',
            'prod_promoPrice' => '0',
            'prod_img' => 'other5',
            'prod_unit' => 'Pack',
            'cat_id' => '4'
        ]);

        DB::table('products')->insert([
            'prod_name' => 'Other 6',
            'prod_description' => 'Lorem ipsum dolor sit amet, id utroque repudiandae ius. Atqui nusquam ei qui, ad mea partem epicurei hendrerit, movet semper mei at. ',
            'prod_unitPrice' => '55',
            'prod_promoPrice' => '0',
            'prod_img' => 'other6',
            'prod_unit' => 'Pack',
            'cat_id' => '4'
        ]);
    }
}

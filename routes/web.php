<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('checkout', 'indexController@checkout')->name('checkout');

Route::get('/', [
    'as' => 'home-page',
    'uses' => 'indexController@returnIndex'
]);

Route::get('/menu', [
    'as' => 'menu-page',
    'uses' => 'indexController@returnMenu'
]);

Route::get('/about', [
    'as' => 'about-page',
    'uses' => 'indexController@returnAbout'
]);

Route::get('/contact', [
    'as' => 'contact-page',
    'uses' => 'indexController@returnContact'
]);

Route::get('add-to-cart/{id}',[
   'as' => 'add-to-cart',
    'uses' => 'indexController@getAdd2Cart'
]);

Route::get('your-cart','indexController@listCartProduct')->name('get.list.cart');

Route::get('cart', 'indexController@listCartProduct')->name('cart');

Route::get('refresh','indexController@refresh')->name('deleteCart');

Route::get('remove1/{id}', 'indexController@remove1')->name('remove1');

Route::get('cart/update/', 'indexController@update');
 
Auth::routes();

Route::get('log-in', [
    'as' => 'log-in',
    'uses' => 'HomeController@login'
]);

Route::get('log-out', [
    'as' => 'log-out',
    'uses' => 'HomeController@logout'
]);


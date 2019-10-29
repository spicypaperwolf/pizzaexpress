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

Route::get('/', [
	'as' => 'home-page',
	'uses' => 'indexController@returnIndex',
]);

Route::get('return-login', [
    'as' => 'log-in',
    'uses' => 'indexController@logIn'
]);

Route::get('/menu', [
	'as' => 'menu-page',
	'uses' => 'indexController@returnMenu',
]);

Route::get('/about', [
	'as' => 'about-page',
	'uses' => 'indexController@returnAbout',
]);

Route::get('/contact', [
	'as' => 'contact-page',
	'uses' => 'indexController@returnContact',
]);

Route::get('add-to-cart/{id}', [
	'as' => 'add-to-cart',
	'uses' => 'indexController@getAdd2Cart',
]);

Route::get('your-cart', 'indexController@listCartProduct')->name('get.list.cart');

Route::get('cart', 'indexController@listCartProduct')->name('cart');

Route::get('refresh', 'indexController@refresh')->name('deleteCart');

Route::get('remove1/{id}', 'indexController@remove1')->name('remove1');

Route::get('guestPurchase', [
    'as' => 'guestPurchase',
    'uses' => 'indexController@guestPurchase'
]);

Route::post('getGuestInfo', [
    'as' => 'getGuestInfo',
    'uses' => 'indexController@getGuestInfo'
]);

Route::get('billing', [
    'as' => 'billing',
    'uses' => 'indexController@returnBilling'
]);

//return view billing1
Route::get('invoice', [
    'as' => 'invoice',
    'uses' => 'indexController@returnInvoice'
]);

Route::post('contactForm', [
    'as' => 'contact-form',
    'uses' => 'indexController@contactForm'
]);

//return view billing1 w cart model
Route::get('getInvoice', [
    'as' => 'getInvoice',
    'uses' => 'indexController@getInvoice'
]);

//print out billing1
Route::get('printInvoice', [
    'as' => 'printInvoice',
    'uses' => 'indexController@printInvoice'
]);

Route::post('getNumber', [
    'as' => 'getNumber',
    'uses' => 'indexController@getNumber'
]);

Route::get('send-mail', [
    'as' => 'send-mail',
    'uses' => 'indexController@sendmail'
]);

Route::get('logout', [
    'as' => 'log-out',
    'uses' => 'Auth\LoginController@logout'
]);

Route::post('insert', [
    'as' => 'insert',
    'uses' => 'indexController@getNewsletter'
]);

Route::post('insertc',[
    'as' => 'insertc',
    'uses' => 'indexController@getContact'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
	Voyager::routes();
});


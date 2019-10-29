<?php

namespace App\Providers;

use App\cart;
use App\products;
use Illuminate\Support\ServiceProvider;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header', function($view){
           $products = products::all();
           $view->with('products', $products);
        });
        view()->composer('header', function ($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty]);
            }
        });
    }
}

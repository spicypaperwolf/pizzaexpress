<?php

namespace App\Http\Controllers;

use App\order;
use App\product_cat;
use App\products;
use App\topping;
use App\user;
use Session ;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function returnIndex(){
        $products = products::all();
        return view('pages.home', compact('products'));
    }

    public function returnMenu(){
        $products = products::all();
        return view('pages.menu', compact('products'));
    }

    public function returnAbout(){
        $products = products::all();
        return view('pages.about', compact('products'));
    }

    public function returnContact()
    {
        $products = products::all();
        return view('pages.contact', compact('products'));
    }

    public function getAdd2Cart($id){
        $product = products::find($id);
        if ($product)
        {
            if($product->prod_promoPrice == 0){
                $cart = \Cart::add($id,$product->prod_name,1,$product->prod_unitPrice,0,['img' => $product->prod_img],0,0);
            } else {
                $cart = \Cart::add($id,$product->prod_name,1,$product->prod_promoPrice,0,['img' => $product->prod_img],0,0);
            }
            return redirect()->route('menu-page', ['data' => $cart]);
        }
    }

    public function listCartProduct()
    {
        $product_cat = product_cat::all();
        $prod = products::all()->sortByDesc('prod_id')->take(2);
        $products = \Cart::content();
        $top = topping::all();
        $users = user::all();
        $viewData = [
            'products' => $products,
            'product_cat' => $product_cat,
            'prod' => $prod,
            'top' =>$top,
            'users' => $users,
        ];
        return view('pages.cart',$viewData);
    }

    public function refresh(){
        \Cart::destroy();
        return redirect()->back();
    }

    public function remove1($id){
        \Cart::remove($id);
        return redirect()->back();
    }

    //Problem need to fix
    public function update(Request $req){
        $qty = $req->newQty;
        $rowId = $req->rowId;
        //Update Cart
        \Cart::update($rowId, $qty);
        return back();
    }

    public function checkout(){
        return order::createOrder();
    }
}

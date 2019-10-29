<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_product;
class PizzaController extends Controller
{
    public function getIndex(){
    	return view('pages.home');
    }

    public function getMenu(){
        $product = tb_product::all();
        return view('pages.menu', compact('product'));
    }

    public function GetURL(Request $request){
    	if ($request->is('My*')) {
    		echo "Have MY";
    	}else{
    		echo "Haven't MY";
    	}
    }
}

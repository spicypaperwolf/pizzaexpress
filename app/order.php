<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class order extends Model
{
    protected $table = "order";

    public function deOr(){
        return $this->hasMany('App\deOr');
    }

    public function orderCols(){
        return $this->belongsToMany(products::class);
    }

    public static function createOrder(){
        $user = Auth::user();
        $order = $user->order()->create(); //insert order to table data

        //place order and insert data to order detail
        foreach(\Cart::content() as $data){
            $order->orderCols()->attach($data->id, [
                'total' =>$data->qty * $data->price,
                'qty' => $data->qty
            ]);
        }

    }
}

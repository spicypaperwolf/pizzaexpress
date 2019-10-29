<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderProduct extends Model
{
    protected $table="orderProduct";

    public function order(){
        return $this->belongsTo('App\order');
    }
    public function products(){
        return $this->belongsTo('App\products');
    }
}

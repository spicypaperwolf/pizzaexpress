<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deOr extends Model
{
    protected $table = "deOr";

    public function products(){
        return $this->belongsTo('App\products', 'prod_id', 'prod_id');
    }

    public function topping(){
        return $this->belongsTo('App\deOr', 'top_id', 'top_id');
    }

    public function order(){
        return $this->belongsTo('App\order', 'order_id', 'order_id');
    }
}

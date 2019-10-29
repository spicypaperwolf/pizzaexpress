<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deOr extends Model
{
    protected $table = "deOr";

    public function products(){
        return $this->belongsTo('App\products');
    }

    public function topping(){
        return $this->belongsTo('App\deOr');
    }

    public function order(){
        return $this->belongsTo('App\order');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_cat extends Model
{
    protected $table = "product_cat";

    public function product(){
        return $this->hasMany('App\products');
    }
}

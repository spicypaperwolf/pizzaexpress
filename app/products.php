<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = "products";
    protected $primaryKey = 'prod_id';

    public function product_cat(){
        return $this->belongsTo('App\product_cat', 'cat_id', 'prod_id');
    }

    public function orderProduct(){
        return $this->hasMany('App\orderProduct');
    }
}

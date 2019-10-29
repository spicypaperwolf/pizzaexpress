<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = "products";
    protected $primaryKey = 'prod_id';

    public function product_cat(){
        return $this->belongsTo('App\product_cat');
    }

    public function deOr(){
        return $this->hasMany('App\deOr');
    }
}

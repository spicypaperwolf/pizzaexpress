<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = "order";

    public function buyer(){
        return $this->belongsTo('App\buyer');
    }

    public function orderProduct(){
        return $this->hasMany('App\orderProduct');
    }
}

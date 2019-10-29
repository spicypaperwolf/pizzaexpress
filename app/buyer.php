<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buyer extends Model
{
    protected $table = "buyer";

    public function order(){
        return $this->hasMany('App\order');
    }

    public function user(){
        return $this->belongsTo('App\user', 'id', 'user_id');
    }
}

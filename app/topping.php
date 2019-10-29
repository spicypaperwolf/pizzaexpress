<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topping extends Model
{
    protected $table = "topping";

    public function deOr(){
        return $this->hasMany('App\deOr');
    }
}

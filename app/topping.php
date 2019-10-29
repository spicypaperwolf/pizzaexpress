<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topping extends Model {
	protected $primaryKey = 'id';
	protected $table = "topping";

	public function deOr() {
		return $this->hasMany('App\deOr', 'top_id', 'top_id');
	}
}

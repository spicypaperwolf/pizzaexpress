<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_cat extends Model {
	protected $table = "product_cat";
	protected $primaryKey = 'cat_id';

	public function product() {
		return $this->hasMany('App\products', 'cat_id', 'cat_id');
	}
}

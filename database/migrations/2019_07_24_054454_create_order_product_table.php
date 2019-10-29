<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('orderProduct', function (Blueprint $table) {
			$table->increments('orderProduct_id');
			$table->integer('order_id');
			$table->integer('order_number');
			$table->integer('prod_id');
			$table->string('prod_name');
			$table->integer('prod_qty');
			$table->decimal('prod_price', 8, 2);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('orderProduct');
	}
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('order', function (Blueprint $table) {
			$table->increments('order_id');
			$table->string('buyer_email');
			$table->integer('order_number');
			$table->integer('order_totalQty');
			$table->integer('order_totalPayment');
			$table->timestamp('order_date')->useCurrent();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('order');
	}
}

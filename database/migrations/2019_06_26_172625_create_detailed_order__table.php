<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailedOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deOr', function (Blueprint $table) {
            $table->increments('deOr_id');
            $table->integer('order_id')->unsigned();
            $table->integer('prod_id')->unsigned();
            $table->integer('deOr_qty');
            $table->double('deOr_total',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deOr');
    }
}

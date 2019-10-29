<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkOrderDetailedOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deOr', function (Blueprint $table) {
            $table->foreign('order_id')->references('order_id')->on('order')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deOr', function (Blueprint $table) {
            if (Schema::hasColumn('deOr','order_id')){
                Schema::table('deOr', function (Blueprint $table){
                    $table->dropForeign(['order_id']);
                });
            }
        });
    }
}

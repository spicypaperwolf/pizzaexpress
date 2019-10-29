<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToppingDetailedOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deOr', function (Blueprint $table) {
            $table->integer('top_id')->unsigned()->after('deOr_total');
            $table->foreign('top_id')->references('top_id')->on('topping')->onDelete('cascade');
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
            if (Schema::hasColumn('deOr','top_id')){
                Schema::table('deOr', function (Blueprint $table){
                    $table->dropForeign(['top_id']);
                    $table->dropColumn('top_id');
                });
            }
        });
    }
}

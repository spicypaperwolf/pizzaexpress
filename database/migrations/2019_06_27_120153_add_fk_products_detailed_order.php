<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkProductsDetailedOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deOr', function (Blueprint $table) {
            $table->foreign('prod_id')->references('prod_id')->on('products')->onDelete('cascade');
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
            if (Schema::hasColumn('deOr','prod_id')){
                Schema::table('deOr', function (Blueprint $table){
                    $table->dropForeign(['prod_id']);
                    $table->dropColumn('prod_id');
                });
            }
        });
    }
}

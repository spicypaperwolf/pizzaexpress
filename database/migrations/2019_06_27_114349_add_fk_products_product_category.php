<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkProductsProductCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('cat_id')->unsigned()->after('prod_unit');
            $table->foreign('cat_id')->references('cat_id')->on('product_cat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            if (Schema::hasColumn('products','cat_id')){
                Schema::table('products', function (Blueprint $table){
                    $table->dropForeign(['cat_id']);
                    $table->dropColumn('cat_id');
                });
            }
        });
    }
}

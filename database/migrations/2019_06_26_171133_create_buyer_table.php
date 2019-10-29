<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer', function (Blueprint $table) {
            $table->increments('buyer_id');
            $table->string('identifier');
            $table->string('buyer_fullName');
            $table->string('buyer_email');
            $table->string('buyer_address');
            $table->string('buyer_phone');
            $table->string('buyer_note')->nullable();
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
        Schema::dropIfExists('buyer');
    }
}

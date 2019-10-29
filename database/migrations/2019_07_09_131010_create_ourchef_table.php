<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurchefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourchef', function (Blueprint $table) {
            $table->integer('id') -> primary();
            $table->string('title', 100);
            $table->string('subtitle', 100);
            $table->string('form_picture', 100);
            $table->string('form_title', 100);
            $table->string('form_subtitle', 100);
            $table->string('form_content', 500);
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
        Schema::dropIfExists('ourchef');
    }
}

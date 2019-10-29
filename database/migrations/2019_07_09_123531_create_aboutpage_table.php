<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutpageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutpage', function (Blueprint $table) {
            $table->integer('id') -> primary();
            $table->string('telephone', 10);
            $table->string('telephone_content', 100);
            $table->string('address', 100);
            $table->string('address_content', 100);
            $table->string('workinghour', 100);
            $table->string('workinghour_content', 100);
            $table->string('abouttitle', 100);
            $table->string('aboutcontent', 500);
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
        Schema::dropIfExists('aboutpage');
    }
}

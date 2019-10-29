<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurserviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourservice', function (Blueprint $table) {
            $table->integer('id') -> primary();
            $table->string('title', 100);
            $table->string('subtitle', 100);
            $table->string('form1_title', 100);
            $table->string('form1_content', 100);
            $table->string('form2_title', 100);
            $table->string('form2_content', 100);
            $table->string('form3_title', 100);
            $table->string('form3_content', 100);
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
        Schema::dropIfExists('ourservice');
    }
}

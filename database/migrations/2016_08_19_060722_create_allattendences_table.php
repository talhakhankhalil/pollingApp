<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllattendencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allattendences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sno');
            $table->string('total_presents');
            $table->string('total_absents');
            $table->string('session');
            $table->string('total_days');
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
        Schema::drop('allattendences');
    }
}

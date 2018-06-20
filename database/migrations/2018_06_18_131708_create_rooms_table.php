<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('nb_places')->nullable();
            $table->string('city');
            $table->string('adress')->nullable();
            $table->string('fee')->nullable();
            $table->boolean('rented')->default(false);
            //$table->foreign('user_id')->references('id')->on('users');
            $table->integer('user_id')->default('1'); // to be removed !!!
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
        Schema::dropIfExists('rooms');
    }
}

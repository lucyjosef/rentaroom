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
            $table->integer('nb_places');
            $table->string('city');
            $table->string('adress');
            $table->string('fee');
            $table->boolean('rented');
            //$table->integer('id_user');
            $table->timestamps();
        });

        Schema::table('rooms', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('id_user')->references('id')->on('users');
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

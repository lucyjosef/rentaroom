<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('rent', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->dateTime('StartDate');
            $table->dateTime('EndDate');
            $table->decimal('Cost',8,2);
            $table->boolean('Billed');
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('room_id')->references('id')->on('rooms');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rent');
    }
}

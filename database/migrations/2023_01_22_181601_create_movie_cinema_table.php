<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieCinemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_cinema', function (Blueprint $table) {
            $table->unsignedBigInteger('movie_id')->unsigned();
            $table->foreign('movie_id')->references('id')->on('movies');

            $table->unsignedBigInteger('cinema_id')->unsigned();
            $table->foreign('cinema_id')->references('id')->on('cinemas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_cinema');
    }
}

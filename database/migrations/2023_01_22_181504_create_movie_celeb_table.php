<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieCelebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_celeb', function (Blueprint $table) {
            $table->unsignedBigInteger('movie_id')->unsigned();
            $table->foreign('movie_id')->references('id')->on('movies');

            $table->unsignedBigInteger('celeb_id')->unsigned();
            $table->foreign('celeb_id')->references('id')->on('celebs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_celeb');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagCinemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_cinema', function (Blueprint $table) {
            $table->unsignedBigInteger('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');

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
        Schema::dropIfExists('tag_cinema');
    }
}

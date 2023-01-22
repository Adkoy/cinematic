<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('status')->default(0);

            $table->unsignedTinyInteger('user_id')->foreign('user_id')->references('id')->on('users');
            $table->unsignedTinyInteger('cinema_id')->foreign('cinema_id')->references('id')->on('cinemas');
            $table->unsignedTinyInteger('hall_id')->foreign('hall_id')->references('id')->on('halls');
            $table->unsignedTinyInteger('show_id')->foreign('show_id')->references('id')->on('shows');
            $table->unsignedTinyInteger('movie_id')->foreign('movie_id')->references('id')->on('movies');

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
        Schema::dropIfExists('tickets');
    }
}

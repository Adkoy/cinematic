<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->time('time');
            $table->date('date');
            $table->string('weekday');
            $table->decimal('price', 13, 0)->nullable();

            $table->unsignedTinyInteger('cinema_id')->foreign('cinema_id')->references('id')->on('cinemas');
            $table->unsignedTinyInteger('hall_id')->foreign('hall_id')->references('id')->on('halls');
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
        Schema::dropIfExists('shows');
    }
}

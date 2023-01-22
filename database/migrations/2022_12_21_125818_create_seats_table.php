<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('status')->default(0);
            $table->decimal('price', 13, 0)->nullable();
            $table->string('place');

            $table->unsignedTinyInteger('hall_id')->foreign('hall_id')->references('id')->on('halls');
            $table->unsignedTinyInteger('cinema_id')->foreign('cinema_id')->references('id')->on('cinemas');


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
        Schema::dropIfExists('seats');
    }
}

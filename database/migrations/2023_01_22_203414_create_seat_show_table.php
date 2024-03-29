<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatShowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_show', function (Blueprint $table) {
            $table->unsignedBigInteger('seat_id')->unsigned();
            $table->foreign('seat_id')->references('id')->on('seats');

            $table->unsignedBigInteger('show_id')->unsigned();
            $table->foreign('show_id')->references('id')->on('shows');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seat_show');
    }
}

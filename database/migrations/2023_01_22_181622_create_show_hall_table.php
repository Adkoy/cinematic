<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowHallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_hall', function (Blueprint $table) {
            $table->unsignedBigInteger('show_id')->unsigned();
            $table->foreign('show_id')->references('id')->on('shows');

            $table->unsignedBigInteger('hall_id')->unsigned();
            $table->foreign('hall_id')->references('id')->on('halls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('show_hall');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCinemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cinemas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('main_image')->nullable();
            $table->string('map_address')->nullable();
            $table->text('address');
            $table->longText('description')->nullable();
            $table->float('avg_rate', 2, 1)->default(1.0);

            $table->float('accessibility_rate', 2, 1)->default(1.0);
            $table->float('facility_rate', 2, 1)->default(1.0);
            $table->float('serviceability_rate', 2, 1)->default(1.0);
            $table->float('cleanness_rate', 2, 1)->default(1.0);
            $table->float('voice_rate', 2, 1)->default(1.0);
            $table->float('screen_rate', 2, 1)->default(1.0);
            $table->float('care_rate', 2, 1)->default(1.0);
            $table->float('hall_rate', 2, 1)->default(1.0);


            $table->unsignedTinyInteger('city_id')->foreign('city_id')->references('id')->on('cities');

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
        Schema::dropIfExists('cinemas');
    }
}

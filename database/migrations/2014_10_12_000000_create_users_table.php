<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone',12)->unique()->index();
            $table->string('identification',10)->nullable()->unique()->index();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->timestamp('birthday')->nullable();
            $table->text('photo')->nullable();
            $table->decimal('wallet', 13, 0)->nullable()->default(0);

            $table->unsignedTinyInteger('role_id')->default(0)
                        ->foreign('role_id')->references('id')->on('roles');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('dob_day')->default(null)->nullable();
            $table->string('dob_month')->default(null)->nullable();
            $table->string('dob_year')->default(null)->nullable();
            $table->string('phone', 30)->default(null)->nullable();
            $table->string('address')->default(null)->nullable();
            $table->string('city')->default(null)->nullable();
            $table->string('state')->default(null)->nullable();
            $table->integer('zipcode')->default(null)->nullable();
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

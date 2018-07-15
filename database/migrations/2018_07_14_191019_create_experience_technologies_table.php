<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_technologies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('experience_id')->unsigned();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->foreign('experience_id')
                ->references('id')
                ->on('experience')->
                onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experience_technologies');
    }
}

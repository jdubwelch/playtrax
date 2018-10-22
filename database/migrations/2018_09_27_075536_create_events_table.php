<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('game_id')->unsigned();
            $table->tinyInteger('quarter')->unsigned()->default(1);
            $table->enum('type', ['run', 'pass'])->default('run');
            $table->enum('side', ['left', 'middle', 'right'])->default('right');
            $table->string('play', 100);
            $table->smallInteger('yardage');
            $table->tinyInteger('ball_carrier')->unsigned()->nullable();
            $table->tinyInteger('tackled_by')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayEventsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('play_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('offense');
            $table->string('type')->default('run');
            $table->string('play', 100);
            $table->smallInteger('yards');
            $table->tinyInteger('rusher')->unsigned()->nullable();
            $table->tinyInteger('tackler')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('play_events');
    }
}

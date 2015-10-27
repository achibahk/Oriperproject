<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('work_id');
            $table->integer('score');
            $table->integer('view_last_week')->unsigned();
            $table->integer('view_last_month')->unsigned();
            $table->integer('bookmark_last_week')->unsigned();
            $table->integer('bookmark_last_month')->unsigned();
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
        Schema::drop('score');
    }
}

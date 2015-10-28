<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIllustrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('illustration', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('work_id');
            $table->string('title',50);
            $table->string('freetalk');
            $table->tinyInteger('image_count');
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
        Schema::drop('illustration');
    }
}

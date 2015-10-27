<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('work_id');
            $table->string('name',50);
            $table->string('gender', 3);
            $table->string('birth',20);
            $table->string('height',20);
            $table->string('weight',20);
            $table->string('job',20);
            $table->string('other');
            $table->string('intro');
            $table->string('freetalk');
            $table->string('derived_from');
            $table->timestamps();
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
        Schema::drop('character');
    }
}

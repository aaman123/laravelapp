<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCombinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('combinations', function (Blueprint $table) {
            //Combination ID
            $table->bigIncrements('id');
            //Combination In String Form
            $table->string('combination');
            //Reel Number Of Slot Game
            $table->integer('reel_number');
            //To Make Sure it was used before
            $table->boolean('used_before');

//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combinations');
    }
}

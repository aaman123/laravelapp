<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     //Bets Would Have -> 1) bet_id , 2) bet_combination 3) bet_result
    public function up()
    {
        Schema::create('bets', function (Blueprint $table) {
            //bet_id
            $table->bigIncrements('id');
            //bet_combination this could be string
            $table->string('bet_combination');
            //Here True Means Bet Won & False Means Bet Lost
            $table->boolean('bet_result');
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
        Schema::dropIfExists('bets');
    }
}

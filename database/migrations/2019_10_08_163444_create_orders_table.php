<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('timeStamp');
            $table->string('orderId');
            $table->text('paymentMethod');
            $table->bigInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('users');
            $table->text('transactionId');
            $table->double('priceInDollars');
            $table->double('priceInCrypto'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

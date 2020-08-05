<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinBuyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_buy', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('transaction_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('buy_price')->nullable();
            $table->string('number')->nullable();
            $table->datetime('date_transaction')->nullable();
            $table->datetime('deleted_at')->nullable();
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
        Schema::dropIfExists('coin_buy');
    }
}

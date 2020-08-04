<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('coin_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('buy')->nullable();
            $table->string('sell')->nullable();
            $table->string('number')->nullable();
            $table->datetime('date_traction')->nullable();
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
        Schema::dropIfExists('coin_detail');
    }
}

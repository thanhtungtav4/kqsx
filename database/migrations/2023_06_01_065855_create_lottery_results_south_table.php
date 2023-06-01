<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotteryResultsSouthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_results_south', function (Blueprint $table) {
            $table->id();
            $table->integer('province_id');
            $table->date('lottery_date');
            $table->integer('prize_special');
            $table->integer('prize_one');
            $table->integer('prize_2');
            $table->integer('prize_3_1');
            $table->integer('prize_3_2');
            $table->integer('prize_4_1');
            $table->integer('prize_4_2');
            $table->integer('prize_4_4');
            $table->integer('prize_4_5');
            $table->integer('prize_4_6');
            $table->integer('prize_4_7');
            $table->integer('prize_5');
            $table->integer('prize_6_1');
            $table->integer('prize_6_2');
            $table->integer('prize_6_3');
            $table->integer('prize_7');
            $table->integer('prize_8');
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
        Schema::dropIfExists('lottery_results');
    }
}

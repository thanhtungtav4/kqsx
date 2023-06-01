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
            $table->integer('prize_two');
            $table->integer('prize_three_1');
            $table->integer('prize_three_2');
            $table->integer('prize_four_1');
            $table->integer('prize_four_2');
            $table->integer('prize_four_4');
            $table->integer('prize_four_5');
            $table->integer('prize_four_6');
            $table->integer('prize_four_7');
            $table->integer('prize_five');
            $table->integer('prize_six_1');
            $table->integer('prize_six_2');
            $table->integer('prize_six_3');
            $table->integer('prize_seven');
            $table->integer('prize_eight');
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
        Schema::dropIfExists('lottery_results_south');
    }
}

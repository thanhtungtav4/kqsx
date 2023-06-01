<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotteryResultsNorthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_results_north', function (Blueprint $table) {
            $table->id();
            $table->integer('province_id');
            // $table->date('lottery_date');
            // $table->integer('prize_special');
            // $table->integer('prize_one');
            // $table->integer('prize_two_1');
            // $table->integer('prize_two_2');
            // $table->integer('prize_three_1');
            // $table->integer('prize_three_2');
            // $table->integer('prize_three_3');
            // $table->integer('prize_three_4');
            // $table->integer('prize_three_5');
            // $table->integer('prize_three_6');
            // $table->integer('prize_four_1');
            // $table->integer('prize_four_2');
            // $table->integer('prize_four_3');
            // $table->integer('prize_four_4');
            // $table->integer('prize_five_1');
            // $table->integer('prize_five_2');
            // $table->integer('prize_five_3');
            // $table->integer('prize_five_4');
            // $table->integer('prize_five_5');
            // $table->integer('prize_five_6');
            // $table->integer('prize_six_1');
            // $table->integer('prize_six_2');
            // $table->integer('prize_six_3');
            // $table->integer('prize_seven');
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
        Schema::dropIfExists('lottery_results_north');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleExtracurricularTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_extracurricular', function (Blueprint $table) {
            $table->id('schedule_id');
            $table->unsignedBigInteger('schedule_esc_id');
            $table->string('schedule_day');
            $table->time('schedule_time_start');
            $table->time('schedule_time_end');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_extracurricular');
    }
}

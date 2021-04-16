<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtracurricularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extracurriculars', function (Blueprint $table) {
            $table->bigIncrements('esc_id');
            $table->string('esc_name');
            $table->longtext('esc_description');
            $table->longtext('esc_vision_mission');
            $table->string('esc_logo');
            $table->timestamps();
            $table->softDeletes();
            // $table->timestamp('deleted_at')->nullable();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extracurriculars');
    }
}

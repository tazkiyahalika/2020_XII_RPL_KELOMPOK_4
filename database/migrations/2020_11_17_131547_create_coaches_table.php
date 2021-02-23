<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function (Blueprint $table) {
            $table->id('coc_id');
            $table->unsignedBigInteger('coc_usr_id');
            $table->unsignedBigInteger('coc_esc_id');
             // $table->string('coc_name');
            // $table->string('coc_extracurricular');
            $table->string('coc_birth');
            $table->string('coc_gender');
            $table->string('coc_study');
            $table->string('coc_job');
            $table->string('coc_address');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->foreign('coc_usr_id')->references('usr_id')->on('Users')->onDelete('cascade');
            $table->foreign('coc_esc_id')->references('esc_id')->on('extracurriculars')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coaches');
    }
}

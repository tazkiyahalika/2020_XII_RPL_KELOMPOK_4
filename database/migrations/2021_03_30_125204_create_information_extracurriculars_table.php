<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationExtracurricularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_extracurriculars', function (Blueprint $table) {
            $table->id('info_id');
            $table->unsignedBigInteger('info_esc_id');
            $table->unsignedBigInteger('info_usr_id');
            $table->longtext('information');
            $table->date('info_date');
            $table->string('info_img');
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
        Schema::dropIfExists('information_extracurriculars');
    }
}

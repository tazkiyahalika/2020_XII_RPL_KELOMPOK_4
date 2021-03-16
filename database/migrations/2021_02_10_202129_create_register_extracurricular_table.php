<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterExtracurricularTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_extracurricular', function (Blueprint $table) {
            $table->id('regis_id');
            $table->unsignedBigInteger('regis_esc_id');
            // $table->unsignedBigInteger('regis_coc_id');
            $table->unsignedBigInteger('regis_usr_id');
            $table->unsignedBigInteger('regis_status');
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
        Schema::dropIfExists('register_extracurricular');
    }
}

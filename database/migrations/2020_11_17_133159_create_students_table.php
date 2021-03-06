<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('std_id');
            $table->unsignedBigInteger('std_usr_id');
            // $table->string('std_name');
            $table->string('std_gender');
            $table->string('std_class');
            $table->string('std_address');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->foreign('std_usr_id')->references('usr_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}

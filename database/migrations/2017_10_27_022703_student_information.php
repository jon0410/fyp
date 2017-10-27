<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_information', function (Blueprint $table) {

            $table->string('std_id')->references('student_id')->on('room_student');
            $table->string('given_name');
            $table->string('surname');
            $table->string('country')->references('country_name')->on('country_list');
            $table->string('program')->references('program_name')->on('program_list');
            $table->string('personal_contact');
            $table->string('emergency_contact');

            $table->primary('std_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_information');
    }
}

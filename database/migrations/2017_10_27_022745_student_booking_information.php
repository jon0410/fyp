<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentBookingInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('month_range', function (Blueprint $table) {
            
            
            $table->string('std_id')->references('student_id')->on('room_student');
            $table->string('semester');
            $table->date('first_tenancy_start_date');
            $table->date('check_in_date');
            $table->date('tenancy_check_out');
            $table->date('actual_check_out');
            $table->string('tenancy_at_hostel');
            $table->string('booking_confirmation');
            $table->string('booking_reference');

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
        Schema::dropIfExists('program_detail');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentFeeInformation extends Migration
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

            $table->integer('weekly/daily_rate')->references('weekly_rate')->on('option_detail');
            $table->integer('rental_adjustment');
            $table->integer('rental_fee/sem');
            $table->integer('booking_fee_paid')->references('amount')->on('booking_fee');
            $table->integer('payment_1');
            $table->integer('payment_2');
            $table->integer('payment_3');
            $table->integer('payment_4');
            $table->integer('outstanding_hostel_fee');
            $table->integer('deposite_refund');

            $table->string('sponsor')->references->('sponsorship_name')->on('sponsorship_list');

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

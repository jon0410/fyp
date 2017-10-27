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
        Schema::create('student_fee_information', function (Blueprint $table) {
            
            $table->string('std_id')->references('student_id')->on('room_student');

            $table->float('weekly/daily_rate')->references('weekly_rate')->on('option_detail');
            $table->float('rental_adjustment');
            $table->float('rental_fee/sem');
            $table->float('booking_fee_paid')->references('amount')->on('booking_fee');
            $table->float('payment_1');
            $table->float('payment_2');
            $table->float('payment_3');
            $table->float('payment_4');
            $table->float('outstanding_hostel_fee');
            $table->float('deposite_refund');
            $table->string('sponsor')->references('sponsorship_name')->on('sponsorship_list');

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
        Schema::dropIfExists('student_fee_information');
    }
}

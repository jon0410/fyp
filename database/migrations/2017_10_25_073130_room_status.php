<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoomStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_status', function (Blueprint $table) {
        $table->increments('id');
        $table->string('room_no');
        $table->string('option_choice')->references('option')->on('option_detail')->nullable();
        $table->string('booking')->references('confirmation')->on('booking_confirm')->nullable();
        $table->string('tenancy')->references('tenancy_type')->on('tenancy_of_hotel')->nullable();
        

    });     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_status');
    }
}

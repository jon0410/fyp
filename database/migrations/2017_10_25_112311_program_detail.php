<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProgramDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_detail', function (Blueprint $table) {
        $table->increments('id');
        $table->string('postgraduate_program');
        $table->date('teaching_start');
        $table->date('teaching_end');
        $table->date('exam_start');
        $table->date('exam_end');
        $table->string('shortcode');
    });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_detail');    }
}

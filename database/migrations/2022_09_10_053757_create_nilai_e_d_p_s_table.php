<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiEDPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_e_d_p_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rekapanEDPID');
            $table->foreign('rekapanEDPID')->references('id')->on('rekapan_e_d_p_s')->onDelete('cascade');
            $table->unsignedBigInteger('questionSectionID');
            $table->foreign('questionSectionID')->references('id')->on('question_sections')->onDelete('cascade');
            $table->unsignedBigInteger('questionSubSectionID');
            $table->foreign('questionSubSectionID')->references('id')->on('question_sub_sections')->onDelete('cascade');
            $table->double('average');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_e_d_p_s');
    }
}

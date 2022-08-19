<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_g_p_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penilaianGPAID');
            $table->foreign('penilaianGPAID')->references('id')->on('penilaian_g_p_a_s')->onDelete('cascade');
            $table->double('GPS')->default(0);
            $table->string('periode')->default('2021/2022');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian_g_p_s');
    }
};

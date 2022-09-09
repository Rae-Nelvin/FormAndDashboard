<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToPenilaianGPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penilaian_g_p_s', function (Blueprint $table) {
            $table->foreign('penilaianGPAID')->references('id')->on('penilaian_g_p_a_s')->onDelete('cascade');
            $table->foreign('periodeID')->references('id')->on('periode_lists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penilaian_g_p_s', function (Blueprint $table) {
            $table->dropForeign('penilaian_g_p_s_penilaianGPAID_foreign');
            $table->dropForeign('penilaian_g_p_s_periodeID_foreign');
        });
    }
}

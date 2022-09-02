<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('posisiID')->references('id')->on('posisi_lists')->onDelete('cascade');
            $table->foreign('golonganID')->references('id')->on('golongan_lists')->onDelete('cascade');
            $table->foreign('unitID')->references('id')->on('unit_lists')->onDelete('cascade');
            $table->foreign('kelasID')->references('id')->on('kelas_lists')->onDelete('cascade');
            $table->foreign('mataPelajaranID')->references('id')->on('mata_pelajaran_lists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->dropForeign('user_details_userID_foreign');
            $table->dropForeign('user_details_posisiID_foreign');
            $table->dropForeign('user_details_golonganID_foreign');
            $table->dropForeign('user_details_unitID_foreign');
            $table->dropForeign('user_details_kelasID_foreign');
            $table->dropForeign('user_details_mataPelajaranID_foreign');
        });
    }
}

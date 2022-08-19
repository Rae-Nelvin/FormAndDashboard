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
        Schema::table('jabatans', function (Blueprint $table) {
            $table->foreign('userID')->references('id')->on('users');
            $table->foreign('jabatanListID')->references('id')->on('jabatan_lists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jabatans', function (Blueprint $table) {
            $table->dropForeign('jabatans_userID_foreign');
            $table->dropForeign('jabatans_jabatanListID_foreign');
        });
    }
};

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
        Schema::table('mengajars', function (Blueprint $table) {
            $table->foreign('userID')->references('id')->on('users');
            $table->foreign('mengajarListID')->references('id')->on('mengajar_lists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mengajars', function (Blueprint $table) {
            $table->dropForeign('mengajars_userID_foreign');
            $table->dropForeign('mengajars_mengajarListID_foreign');
        });
    }
};

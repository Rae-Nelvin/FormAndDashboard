<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPeriodeColumnOnAnswerPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('answer_packages', function (Blueprint $table) {
            $table->unsignedBigInteger('periodeID');
            $table->foreign('periodeID')->references('id')->on('periodes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('answer_packages', function (Blueprint $table) {
            $table->dropColumn('periodeID');
            $table->dropForeign('answer_packages_periodeID_foreign');
        });
    }
}

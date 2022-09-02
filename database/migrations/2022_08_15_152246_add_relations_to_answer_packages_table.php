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
        Schema::table('answer_packages', function (Blueprint $table) {
            $table->foreign('userID')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('questionGroupID')->references('id')->on('question_groups')->onUpdate('cascade');
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
            $table->dropForeign('answer_packages_userID_foreign');
            $table->dropForeign('answer_packages_questionGroupID_foreign');
            $table->dropForeign('answer_packages_questionSectionID_foreign');
            $table->dropForeign('answer_packages_questionSubSectionID_foreign');
        });
    }
};

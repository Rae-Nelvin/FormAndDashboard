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
        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('groupID')->references('id')->on('question_groups')->onUpdate('cascade');
            $table->foreign('sectionID')->references('id')->on('question_sections')->onUpdate('cascade');
            $table->foreign('subsectionID')->references('id')->on('question_sub_sections')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropForeign('questions_groupid_foreign');
            $table->dropForeign('questions_sectionid_foreign');
            $table->dropForeign('questions_subsectionid_foreign');
        });
    }
};

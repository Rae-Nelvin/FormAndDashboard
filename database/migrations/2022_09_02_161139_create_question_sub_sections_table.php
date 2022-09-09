<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionSubSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_sub_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('groupQuestionID');
            $table->foreign('groupQuestionID')->references('id')->on('question_groups')->onDelete('cascade');
            $table->unsignedBigInteger('sectionQuestionID');
            $table->foreign('sectionQuestionID')->references('id')->on('question_sections')->onDelete('cascade');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_sub_sections');
    }
}

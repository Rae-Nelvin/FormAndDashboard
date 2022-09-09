<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('answerPackageID');
            $table->foreign('answerPackageID')->references('id')->on('answer_packages')->onDelete('cascade');
            $table->unsignedBigInteger('questionSectionID');
            $table->foreign('questionSectionID')->references('id')->on('question_sections')->onDelete('cascade');
            $table->unsignedBigInteger('questionSubSectionID');
            $table->foreign('questionSubSectionID')->references('id')->on('question_sub_sections')->onDelete('cascade');
            $table->unsignedBigInteger('questionID');
            $table->foreign('questionID')->references('id')->on('questions')->onDelete('cascade');
            $table->string('answer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}

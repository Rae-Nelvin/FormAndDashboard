<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('groupID');
            $table->foreign('groupID')->references('id')->on('question_groups')->onDelete('cascade');
            $table->unsignedBigInteger('sectionID');
            $table->foreign('sectionID')->references('id')->on('question_sections')->onDelete('cascade');
            $table->unsignedBigInteger('subsectionID');
            $table->foreign('subsectionID')->references('id')->on('question_sub_sections')->onDelete('cascade');
            $table->string('question');
            $table->string('questionType');
            $table->integer('minimumScore')->nullable();
            $table->integer('maximumScore')->nullable();
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
        Schema::dropIfExists('questions');
    }
}

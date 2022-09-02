<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dinilaiID');
            $table->foreign('dinilaiID')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('penilaiID');
            $table->foreign('penilaiID')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('questionGroupID');
            $table->foreign('questionGroupID')->references('id')->on('question_groups')->onDelete('cascade');
            $table->boolean('isDone')->default(0);
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
        Schema::dropIfExists('answer_packages');
    }
}

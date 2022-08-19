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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('groupID');
            $table->unsignedBigInteger('sectionID');
            $table->unsignedBigInteger('subsectionID');
            $table->string('question');
            $table->string('questionType');
            $table->unsignedInteger('minimumScore')->default(0)->nullable();
            $table->unsignedInteger('maximumScore')->default(0)->nullable();
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
};

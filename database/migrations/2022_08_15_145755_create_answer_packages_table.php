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
        Schema::create('answer_packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userID');
            $table->unsignedBigInteger('questionGroupID');
            $table->unsignedBigInteger('questionSectionID');
            $table->unsignedBigInteger('questionSubSectionID');
            $table->boolean('isDone')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
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
};

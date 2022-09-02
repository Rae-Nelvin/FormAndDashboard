<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userID');
            $table->string('NIY')->nullable();
            $table->unsignedBigInteger('posisiID')->nullable();
            $table->unsignedBigInteger('golonganID')->nullable();
            $table->unsignedBigInteger('unitID')->nullable();
            $table->unsignedBigInteger('kelasID')->nullable();
            $table->unsignedBigInteger('mataPelajaranID')->nullable();
            $table->string('avatar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}

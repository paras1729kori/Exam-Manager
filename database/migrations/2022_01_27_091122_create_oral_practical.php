<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOralPractical extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oral_practical', function (Blueprint $table) {
            $table->id();
            $table->integer('semester');
            $table->string('subName');
            $table->date('examDate');
            $table->time('startTime');
            $table->time('endTime');
            $table->integer('user_id');
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
        Schema::dropIfExists('oral_practical');
    }
}

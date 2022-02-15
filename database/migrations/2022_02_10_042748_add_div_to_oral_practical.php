<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDivToOralPractical extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oral_practical', function (Blueprint $table) {
            $table->string('div');
            $table->string('batch');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oral_practical', function (Blueprint $table) {
            $table->dropColumn('div');
            $table->dropColumn('batch');
        });
    }
}

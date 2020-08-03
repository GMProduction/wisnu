<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditKonsultasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_konsultasis', function (Blueprint $table) {
            //
            $table->foreign('id_jadwal')->references('id')->on('t_jadwals');
            $table->foreign('id_advokat')->references('id')->on('t_advokats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_konsultasis', function (Blueprint $table) {
            //
        });
    }
}

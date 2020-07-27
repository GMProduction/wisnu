<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditIdJadwalKasus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_jadwals', function (Blueprint $table) {
            //
//            $table->foreign('no_registrasi')->references('id')->on('t_kasus');
        });
        Schema::table('t_jadwals', function (Blueprint $table) {
            //
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
        Schema::table('t_jadwals', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditIdJadwal extends Migration
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
            $table->dropColumn('id_jadwal');
        });
        Schema::table('t_jadwals', function (Blueprint $table) {
            //
            $table->id();
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditKonsultasiId extends Migration
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
            $table->dropColumn('id_konsultasi');
        });
        Schema::table('t_konsultasis', function (Blueprint $table) {
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
        Schema::table('t_konsultasis', function (Blueprint $table) {
            //
        });
    }
}

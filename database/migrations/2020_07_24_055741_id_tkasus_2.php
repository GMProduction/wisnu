<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IdTkasus2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_kasus', function (Blueprint $table) {
            //
            $table->id();
            $table->bigInteger('id_pemohon')->unsigned();
            $table->foreign('id_pemohon')->references('id')->on('t_pemohons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_kasus', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_jadwals', function (Blueprint $table) {
            $table->bigInteger('id_jadwal')->primary();
            $table->bigInteger('no_registrasi')->unsigned();
            $table->dateTime('tanggal');
            $table->bigInteger('id_advokat')->unsigned();
            $table->string('layanan', '25');
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
        Schema::dropIfExists('t_jadwals');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKonsultasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_konsultasis', function (Blueprint $table) {
            $table->bigInteger('id_konsultasi')->primary();
            $table->bigInteger('id_jadwal')->unsigned();
            $table->bigInteger('id_advokat')->unsigned();
            $table->longText('proses_konsultasi');
            $table->longText('detail_konsultasi');
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
        Schema::dropIfExists('t_konsultasis');
    }
}

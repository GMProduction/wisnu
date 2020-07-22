<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_permohonan', function (Blueprint $table) {
            $table->bigInteger('id_permohonan');
            $table->bigInteger('no_registrasi');
            $table->longText('keterangan_permohonan');
            $table->longText('alasan');
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
        Schema::dropIfExists('t_permohonans');
    }
}

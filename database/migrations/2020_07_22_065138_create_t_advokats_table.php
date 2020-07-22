<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAdvokatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_advokats', function (Blueprint $table) {
            $table->mediumInteger('id_advokat')->primary();
            $table->string('nama_advokat','25');
            $table->string('alamat','25');
            $table->string('tempat_lahir','25');
            $table->string('tanggal_lahir','25');
            $table->string('no_telepon','25');
            $table->string('email','25');
            $table->timestamps();
        });

        Schema::create('t_kasus', function (Blueprint $table) {
            $table->id();
            $table->mediumInteger('no_registrasi');
            $table->mediumInteger('no_identitas');
            $table->string('nama_pemohon', 25);
            $table->string('jenis_kasus', 25);
            $table->string('layanan', 25);
            $table->string('kronologi_kasus', 25);
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
        Schema::dropIfExists('t_advokats');
        Schema::dropIfExists('t_kasus');

    }
}

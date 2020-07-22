<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPemohonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pemohon', function (Blueprint $table) {
            //
            $table->id();
            $table->integer('no_identitas')->unique();
            $table->string('nama_pemohon', 25);
            $table->string('jenis_kelamin', 25);
            $table->string('alamat', 25);
            $table->string('tempat_lahir', 25);
            $table->date('tanggal_lahir');
            $table->string('pekerjaan', 25);
            $table->string('agama', 25);
            $table->string('kewarganegaraan', 25);
            $table->string('status', 25);
            $table->string('no_telepon', 25);
            $table->string('email', 25);
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
        Schema::dropIfExists('t_pemohon');

    }
}

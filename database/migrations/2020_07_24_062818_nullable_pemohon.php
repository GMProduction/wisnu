<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NullablePemohon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_pemohons', function (Blueprint $table){
            $table->dropColumn('jenis_kelamin');
            $table->dropColumn('agama');
            $table->dropColumn('status');
        });
        Schema::table('t_pemohons', function (Blueprint $table) {
            //
            $table->string('nama_pemohon')->nullable()->change();
            $table->enum('jenis_kelamin', ['L', 'P'])->default('L');
            $table->text('alamat')->nullable()->change();
            $table->string('tempat_lahir')->nullable()->change();
            $table->date('tanggal_lahir')->nullable()->change();
            $table->string('pekerjaan')->nullable()->change();
            $table->enum('agama', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha'])->default('Islam');
            $table->enum('status', ['Belum Kawin', 'Kawin', 'Cerai Mati', 'Cerai Hidup'])->default('Belum Kawin');
            $table->string('email', 25)->nullable()->change();
            $table->string('no_telepon', 25)->nullable()->change();
            $table->string('kewarganegaraan', 25)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_pemohons', function (Blueprint $table) {
            //
        });
    }
}

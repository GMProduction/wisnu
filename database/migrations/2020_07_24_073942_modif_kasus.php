<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifKasus extends Migration
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
            $table->dropColumn('no_identitas');
            $table->dropColumn('nama_pemohon');
            $table->dropColumn('jenis_kasus');
        });
        Schema::table('t_kasus', function (Blueprint $table) {
            //
            $table->enum('jenis_kasus', ['perdana', 'perdata'])->default('perdana');
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

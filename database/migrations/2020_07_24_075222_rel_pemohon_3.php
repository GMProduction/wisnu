<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelPemohon3 extends Migration
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
            $table->dropForeign('t_kasus_id_pemohon_foreign');
            $table->dropColumn('id_pemohon');
        });

        Schema::table('t_kasus', function (Blueprint $table) {
            //
            $table->bigInteger('id_pemohon')->unsigned();
            $table->foreign('id_pemohon')->references('id')->on('users');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kewarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_pemohons', function (Blueprint $table) {
            //
            $table->dropColumn('kewarganegaraan');
        });
        Schema::table('t_pemohons', function (Blueprint $table) {
            //
            $table->enum('kewarganegaraan', ['WNI', 'WNA'])->default('WNI');
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

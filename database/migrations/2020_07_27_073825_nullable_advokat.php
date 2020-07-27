<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NullableAdvokat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_advokats', function (Blueprint $table) {
            //
            $table->string('nama_advokat','25')->nullable()->change();
            $table->string('alamat','25')->nullable()->change();
            $table->string('tempat_lahir','25')->nullable()->change();
            $table->string('no_telepon','25')->nullable()->change();
            $table->string('email','25')->nullable()->change();
            $table->date('tanggal_lahir')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_advokats', function (Blueprint $table) {
            //
        });
    }
}

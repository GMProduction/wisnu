<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StatusKasus extends Migration
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
            $table->enum('status', ['pending', 'terima', 'tolak'])->default('pending');
            $table->text('alasan');
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

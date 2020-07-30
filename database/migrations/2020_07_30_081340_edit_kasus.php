<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditKasus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_kasus',function (Blueprint $table) {
                //
                $table->text('image')->nullable();
            });

        Schema::table('t_jadwals',function (Blueprint $table) {
            //
            $table->dropColumn('layanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            't_kasus',
            function (Blueprint $table) {
                //
            }
        );
    }
}

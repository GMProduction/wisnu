<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditLevelUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('users', function (Blueprint $table) {
//            //
//            $table->enum('level', ['admin', 'pemohon','advokat'])->default('pemohon')->change();
//
//        });
        DB::statement("ALTER TABLE users CHANGE COLUMN `level` `level` ENUM('admin', 'pemohon', 'advokat') NOT NULL DEFAULT 'pemohon'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}

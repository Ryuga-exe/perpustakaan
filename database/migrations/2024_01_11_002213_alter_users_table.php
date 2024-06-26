<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->text('foto')->nullable();
            $table->enum('role',['admin','petugas','peminjam']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nama_lengkap');
            $table->dropColumn('alamat');
            $table->dropColumn('foto');
            $table->dropColumn('role');
        });
    }
};

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('kode_member')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('nama');
            $table->string('ribath')->nullable();
            $table->string('kamar')->nullable();
            $table->string('sekolah')->nullable();
            $table->string('kelas')->nullable();
            $table->string('kelas_MHM')->nullable();
            $table->string('level')->nullable();
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
        Schema::dropIfExists('users');
    }
};

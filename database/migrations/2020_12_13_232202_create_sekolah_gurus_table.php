<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSekolahGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolah_gurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sekolah_id');
            $table->string('nama_pengajar')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('pend_terakhir')->nullable();
            $table->string('nama_sekolah')->nullable();
            $table->string('penghargaan')->nullable();
            $table->string('visi')->nullable();
            $table->string('motto')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('sekolah_gurus');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_sekolah')->nullable();
            $table->string('jenis_sekolah')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('logo_normal')->nullable();
            $table->string('logo_samping')->nullable();
            $table->string('fax')->nullable();
            $table->string('slug')->nullable();
            $table->string('link_sekolah')->nullable();
            $table->string('akreditasi')->nullable();
            $table->string('provinsi_id')->nullable();
            $table->string('kabkot_id')->nullable();
            $table->string('kecamatan_id')->nullable();
            $table->string('kelurahan_id')->nullable();
            $table->string('categories_id')->nullable();
            $table->string('tags_id')->nullable();
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
        Schema::dropIfExists('sekolahs');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeskripsiProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deskripsi_programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sekolahprogram_id')->nullable();
            $table->string('foto')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('keunggulan')->nullable();
            $table->string('yang_dipelajari')->nullable();
            $table->string('prospek')->nullable();
            $table->string('jumlah_sesi')->nullable();
            $table->string('syarat')->nullable();
            $table->string('biaya_id')->nullable();
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
        Schema::dropIfExists('deskripsi_programs');
    }
}

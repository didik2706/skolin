<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPendaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pendaftars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('nama_lengkap')->nullable();
            $table->string('status')->nullable();
            $table->string('email')->nullable();
            $table->string('no_whatsapp')->nullable();
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
        Schema::dropIfExists('data_pendaftars');
    }
}

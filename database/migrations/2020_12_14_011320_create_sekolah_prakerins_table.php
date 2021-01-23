<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSekolahPrakerinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolah_prakerins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sekolah_id');
            $table->string('kalimat_pembuka')->nullable();
            $table->string('prakerin_id')->nullable();
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
        Schema::dropIfExists('sekolah_prakerins');
    }
}

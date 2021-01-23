<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSekolahPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolah_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sekolah_id');
            $table->string('page_id')->nullable();
            $table->string('page1')->nullable();
            $table->string('page2')->nullable();
            $table->string('page3')->nullable();
            $table->string('page4')->nullable();
            $table->string('page5')->nullable();
            $table->string('page6')->nullable();
            $table->string('page7')->nullable();
            $table->string('page8')->nullable();
            $table->string('page9')->nullable();
            $table->string('page10')->nullable();
            $table->string('page11')->nullable();
            $table->string('page12')->nullable();
            $table->string('page13')->nullable();
            $table->string('page14')->nullable();
            $table->string('page15')->nullable();
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
        Schema::dropIfExists('sekolah_pages');
    }
}

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
        Schema::create('lamaran', function (Blueprint $table) {
            $table->increments('id_lamaran');
            $table->string('nis');
            $table->foreign('nis')->references('nis')->on('alumni');
            $table->integer('id_loker')->unsigned();
            $table->foreign('id_loker')->references('id_loker')->on('lowongan');
            $table->string('surat_lamaran');
            $table->string('cv');
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
        Schema::dropIfExists('lamaran');
    }
};

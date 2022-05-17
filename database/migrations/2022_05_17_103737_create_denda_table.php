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
        Schema::create('denda', function (Blueprint $table) {
            $table->bigIncrements('jumlah_hari');
            $table->string('id_denda');
            $table->foreign('id_denda')->references('NISN')->on('siswa')->onDelete('cascade');
            $table->double('biaya_denda');
            $table->string('id_pinjaman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denda');
    }
};

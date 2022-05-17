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
        Schema::create('buku', function (Blueprint $table) {
            $table->string('kode_buku')->primary();
            $table->unsignedBigInteger('id_pustakawan');
            $table->foreign('id_pustakawan')->references('id')->on('meminjam_guru')->onDelete('cascade');
            $table->string('judul_buku');
            $table->string('pengarang');
            $table->date('tahun_terbit');
            $table->string('penerbit');
            $table->integer('eksemplar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
};

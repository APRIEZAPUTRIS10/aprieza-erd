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
        Schema::create('pinjaman', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pinjaman');
            $table->foreign('id_pinjaman')->references('id')->on('meminjam_guru')->onDelete('cascade');
            $table->unsignedBigInteger('kode_buku');
            $table->foreign('kode_buku')->references('id_pinjaman')->on('meminjam')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjaman');
    }
};

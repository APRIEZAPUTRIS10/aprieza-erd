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
        Schema::create('meminjam', function (Blueprint $table) {
            $table->bigIncrements('id_pinjaman');
            $table->string('NISN');
            $table->foreign('NISN')->references('NISN')->on('siswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meminjam');
    }
};

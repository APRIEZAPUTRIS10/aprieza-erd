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
        Schema::create('guru', function (Blueprint $table) {
            $table->unsignedBigInteger('NIP');
            $table->foreign('NIP')->references('id')->on('meminjam_guru')->onDelete('cascade');
            $table->string('nama_guru');
            $table->string('pangkat');
            $table->string('jabatan');
            $table->string('golongan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru');
    }
};

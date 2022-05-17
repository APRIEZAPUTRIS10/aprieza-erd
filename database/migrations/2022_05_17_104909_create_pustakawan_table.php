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
        Schema::create('pustakawan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pustakawan');
            $table->foreign('id_pustakawan')->references('id_pustakawan')->on('buku')->onDelete('cascade');
            $table->string('nama_pustakawan');
            $table->string('username');
            $table->string('password');
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
        Schema::dropIfExists('pustakawan');
    }
};

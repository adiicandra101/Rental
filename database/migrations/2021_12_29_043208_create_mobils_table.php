<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_merek');
            $table->string('nama_mobil');
            $table->integer('nopol');
            $table->integer('tahun');
            $table->string('seat');
            $table->string('transmisi');
            $table->string('bb');
            $table->string('status_mobil');
            $table->string('tarif_mobil');
            $table->string('tarif_sopir');
            $table->string('img1');
            $table->timestamps();

            $table->foreign('id_merek')->references('id')->on('mereks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobils');
    }
}

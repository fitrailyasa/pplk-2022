<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodis', function (Blueprint $table) {
            $table->id();
            $table->string('namaLengkap')->unique()->nullable();
            $table->string('namaSingkat')->unique()->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('kepalaProdi')->nullable();
            $table->string('akreditasi')->nullable();
            $table->integer('tahunBerdiri')->nullable();
            $table->string('ruangProdi')->nullable();
            $table->integer('jumlahMahasiswa')->nullable();
            $table->string('logo')->nullable();
            $table->string('prestasi1')->nullable();
            $table->string('prestasi2')->nullable();
            $table->string('prestasi3')->nullable();
            $table->foreignId('jurusan_id')->nullable();
            $table->foreign('jurusan_id')->references('id')->on('jurusans')->nullable();
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
        Schema::dropIfExists('prodis');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukms', function (Blueprint $table) {
            $table->id();
            $table->string('namaLengkap')->unique();
            $table->string('namaSingkat')->unique();
            $table->text('visi');
            $table->text('misi');
            $table->text('deskripsi');
            $table->string('pembina')->nullable();
            $table->string('ketuaUmum')->nullable();
            $table->integer('tahunBerdiri')->nullable();
            $table->string('logo')->nullable();
            $table->text('filosofiLogo')->nullable();
            $table->string('qrCode')->nullable();
            $table->string('dokumentasi1')->nullable();
            $table->string('dokumentasi2')->nullable();
            $table->string('dokumentasi3')->nullable();
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
        Schema::dropIfExists('ukms');
    }
}

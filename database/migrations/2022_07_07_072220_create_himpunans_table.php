<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHimpunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('himpunans', function (Blueprint $table) {
            $table->id();
            $table->string('namaLengkap')->unique();
            $table->string('namaSingkat')->unique();
            $table->text('visi');
            $table->text('misi');
            $table->text('deskripsi');
            $table->string('pembina')->nullable();
            $table->string('ketuaHimpunan')->nullable();
            $table->integer('tahunBerdiri')->nullable();
            $table->string('logo')->nullable();
            $table->text('filosofiLogo')->nullable();
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
        Schema::dropIfExists('himpunans');
    }
}

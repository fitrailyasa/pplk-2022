<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTebakBangunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tebak_bangunans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('namaBangunan');
            $table->string('soal');
            $table->string('jawabanBenar');
            $table->string('jawabanA');
            $table->string('jawabanB');
            $table->string('jawabanC');
            $table->string('jawabanD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tebak_bangunans');
    }
}

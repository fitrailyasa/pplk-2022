<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokenTebakBangunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token_tebak_bangunans', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('token');
            $table->string('kelompok');
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
        Schema::dropIfExists('token_tebak_bangunans');
    }
}

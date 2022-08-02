<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nim')->nullable()->unique();
            $table->string('kelompok')->nullable();
            $table->string('instagram')->nullable();
            $table->string('prodi')->nullable();
            $table->string('nomorHp')->nullable();
            $table->string('golonganDarah')->nullable();
            $table->string('riwayatPenyakit')->nullable();
            $table->string('fotoProfil')->nullable();
            $table->string('qrCode')->nullable();
            $table->foreignId('roles_id')->constrained('roles')->onDelete('cascade')->onUpdate('cascade');

            /* $table->string('qrCode'); */

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
        Schema::dropIfExists('users');
    }
}

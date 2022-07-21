<?php

use App\Models\Ormawa;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrmawasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ormawas', function (Blueprint $table) {
            $table->id();
            $table->string('namaLengkap')->unique();
            $table->string('namaSingkat')->unique();
            $table->foreignId('kategoris_id');
            $table->foreign('kategoris_id')->references('id')->on('kategoris');
            $table->text('visi');
            $table->text('misi');
            $table->text('deskripsi');
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
        Schema::dropIfExists('ormawas');
    }
}

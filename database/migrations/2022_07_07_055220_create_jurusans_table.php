d<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateJurusansTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('jurusans', function (Blueprint $table) {
                $table->id();
                $table->string('namaLengkap');
                $table->string('namaSingkat');
                $table->text('visi');
                $table->text('misi');
                $table->string('kepalaJurusan');
                $table->string('ruangJurusan');
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
            Schema::dropIfExists('jurusans');
        }
    }

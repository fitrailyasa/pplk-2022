<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKabinetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabinets', function (Blueprint $table) {
            $table->id();
            $table->string('pembina')->nullable();
            $table->string('ketuaHimpunan')->nullable();
            $table->string('diesNatalis')->nullable();
            $table->string('visi')->nullable();
            $table->string('misi')->nullable();
            $table->text('filosofiLogo')->nullable();
            $table->text('organigram')->nullable();
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
        Schema::dropIfExists('kabinets');
    }
}

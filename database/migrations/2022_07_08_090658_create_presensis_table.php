[16:03, 7/8/2022] aldi iF'21: <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('presensi_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->date('hari');
            $table->foreignId('status_id');
            $table->foreign('status_id')->references('id')->on('status_kehadirans');
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
        Schema::dropIfExists('presensis');
    }
}
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
                                            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
                                            $table->string('hari');
                                            $table->string('status');
                                            $table->string('token')->unique();
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

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UkmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'namaLengkap'=>$this->faker->unique()->name(3),
            'namaSingkat'=>$this->faker->unique()->name(1),
            'visi'=>$this->faker->unique()->text(20,30),
            'misi'=>$this->faker->unique()->text(20,30),
            'deskripsi'=>$this->faker->unique()->text(mt_rand(20,30)),
            'pembina'=>$this->faker->unique()->name(1),
            'ketuaUmum'=>$this->faker->unique()->name(1),
            'tahunBerdiri'=>random_int(2013,2017),
            'logo'=>$this->faker->text(10),
            'filosofiLogo'=>$this->faker->text(50),
            'qrCode'=>$this->faker->text(20),
            'dokumentasi1'=>$this->faker->text(10),
            'dokumentasi1'=>$this->faker->text(10),
            'dokumentasi1'=>$this->faker->text(10)

            //
        ];

        // $table->string('pembina')->nullable();
        // $table->string('ketuaUmum')->nullable();
        // $table->integer('tahunBerdiri')->nullable();
        // $table->string('logo')->nullable();
        // $table->text('filosofiLogo')->nullable();
        // $table->string('qrCode')->nullable();
        // $table->string('dokumentasi1')->nullable();
        // $table->string('dokumentasi2')->nullable();
        // $table->string('dokumentasi3')->nullable();
    }
}

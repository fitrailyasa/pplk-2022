<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class HimpunanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'namaLengkap'=>$this->faker->unique()->name(4,6),
            'namaSingkat'=>$this->faker->unique()->name(1),
            'visi'=>$this->faker->unique()->text(20,30),
            'misi'=>$this->faker->unique()->text(20,30),
            'deskripsi'=>$this->faker->text(mt_rand(20,30)),
            'ketuaHimpunan'=>$this->faker->name(2),
            'pembina'=>$this->faker->name(2),
            'kodeWarna'=>array_rand(['A','B','C']),
            'tahunBerdiri'=>random_int(2013,2017),
            'logo'=>$this->faker->text(10),
            'filosofiLogo'=>$this->faker->text(50)
        ];

        // $table->string('kodeWarna')->nullable();
        // $table->string('pembina')->nullable();
        // $table->string('ketuaHimpunan')->nullable();
        // $table->integer('tahunBerdiri')->nullable();
        // $table->string('logo')->nullable();
        // $table->text('filosofiLogo')->nullable();
    }
}

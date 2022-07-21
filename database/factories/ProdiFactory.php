<?php

namespace Database\Factories;

use App\Models\Ormawa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\OrmawaFactory;

class ProdiFactory extends Factory
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
            'kepalaProdi'=>$this->faker->name(2),
            'akreditasi'=>array_rand(['A','B','C']),
            'tahunBerdiri'=>random_int(2013,2017),
            'ruangProdi'=>$this->faker->name(1),
            'jumlahMahasiswa'=>random_int(100,900),
            'diagramAlir'=>$this->faker->name(6),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            
            'namaProdi'=>$this->faker->name(1),
            'kepalaProdi'=>$this->faker->name(2),
            'akreditasi'=>array_rand(['A','B','C']),
            'tahunBerdiri'=>random_int(2013,2017),
            'ruangProdi'=>$this->faker->name(1),
            'jumlahMahasiswa'=>random_int(100,900),
            'diagramAlir'=>$this->faker->name(6),
            'ormawas_id'=>1,
            'jurusans_id'=>random_int(1,3)
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Ormawa;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrmawaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'namaLengkap'=>$this->faker->name(1),
            'namaSingkat'=>$this->faker->name(1),
            'kategoris_id'=>random_int(1,3),
            'visi'=>$this->faker->sentence(mt_rand(5,6)),
            'misi'=>$this->faker->sentence(mt_rand(2,10)),
            'deskripsi'=>$this->faker->sentence(mt_rand(5,15))


        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BegalinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul'=>$this->faker->unique()->name(1),
            'isi'=>$this->faker->unique()->text(mt_rand(250,300))
        ];
    }
}

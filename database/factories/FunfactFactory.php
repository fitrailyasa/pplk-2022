<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FunfactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'isi'=>$this->faker->unique()->text(mt_rand(5,6)),
            'booklet'=>$this->faker->unique()->text(mt_rand(5,6))
        ];
    }
}

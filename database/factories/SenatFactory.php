<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SenatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ketua'=>$this->faker->name(2),
            'deskripsi'=>$this->faker->text(mt_rand(50,100)),
            'website'=>$this->faker->name(10),
            'youtube'=>$this->faker->name(10),
            'instagram'=>$this->faker->name(10)
            //
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama'=>$this->faker->name(2),
            'deskripsi'=>$this->faker->text(100)
            //
        ];
    }
}

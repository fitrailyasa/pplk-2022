<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KamusgaulFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gaul'=>$this->faker->name(1),
            'asli'=>$this->faker->text(100)
        ];
    }
}

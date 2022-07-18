<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PPLKFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logo'=>$this->faker->text(10),
            'visi'=>$this->faker->text(10),
            'misi'=>$this->faker->text(20)
            //
        ];
    }
}

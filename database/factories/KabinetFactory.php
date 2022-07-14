<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KabinetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama'=>'Kabinet KM Itera',
            'presiden'=>'Arby',
            'sekjen'=>'Rafi',
            'organigram'=>$this->faker->text(10),
            'logo'=>$this->faker->text(10),
            'filosofiLogo'=>$this->faker->text(10),
            'deskripsi'=>$this->faker->text(10)
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreTebakBangunanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $order=1;
        return [
            'user_id'=>$order++,
            'score'=>'0',
            'kesempatan'=>'0'


        ];
    }
}

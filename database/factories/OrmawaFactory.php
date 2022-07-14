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
            Ormawa::factory(5)->create()
        ];
    }
}

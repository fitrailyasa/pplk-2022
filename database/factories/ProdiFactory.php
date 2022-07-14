<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'namaProdi' => $this->faker->name(),
            'kepalaprodi' => $this->faker->unique()->safeEmail(),
            'akreditasi' => now(),
            'tahunBerdiri' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
            //
        ];
    }
}

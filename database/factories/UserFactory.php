<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' =>$this->faker->unique()->name(2),
            'email' =>$this->faker->unique()->name(1).'@gmail.com',
            'password' =>$this->faker->unique()->name(1),
            'nim' => random_int(99999999,999999999),
            'kelompok' => random_int(1,165),
            'roles_id' => random_int(1,8),
            'instagram' => 'instagram.com/'.$this->faker->name(1),
            'prodi' => random_int(1,10),
            'qrCode'=>$this->faker->text(10),
            'nomorHp'=>$this->faker->integer(12),
            'golonganDarah'=>$this->faker->name(1),
            'riwayatPenyakit'=>$this->faker->name(2),
            'fotoProfil'=>$this->faker->name(4)
            //
        ];
    }
}

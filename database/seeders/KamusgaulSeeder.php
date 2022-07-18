<?php

namespace Database\Seeders;

use App\Models\Kamusgaul;
use Illuminate\Database\Seeder;

class KamusgaulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kamusgaul::factory(6)->create();
    }
}

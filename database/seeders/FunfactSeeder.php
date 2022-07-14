<?php

namespace Database\Seeders;

use App\Models\Funfact;
use Illuminate\Database\Seeder;

class FunfactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Funfact::factory(5)->create();
    }
}

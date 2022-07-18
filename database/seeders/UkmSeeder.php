<?php

namespace Database\Seeders;

use App\Models\Ukm;
use Illuminate\Database\Seeder;

class UkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ukm::factory(10)->create();
    }
}

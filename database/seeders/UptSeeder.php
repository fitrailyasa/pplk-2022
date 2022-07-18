<?php

namespace Database\Seeders;

use App\Models\Upt;
use Illuminate\Database\Seeder;

class UptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Upt::factory(5)->create();
    }
}

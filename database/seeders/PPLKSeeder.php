<?php

namespace Database\Seeders;

use App\Models\PPLK;
use Illuminate\Database\Seeder;

class PPLKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PPLK::factory(1)->create();
        //
    }
}

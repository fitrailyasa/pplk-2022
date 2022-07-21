<?php

namespace Database\Seeders;

use App\Models\Kabinet;
use Illuminate\Database\Seeder;

class KabinetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kabinet::factory(1)->create();
    }
}

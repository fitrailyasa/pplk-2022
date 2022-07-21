<?php

namespace Database\Seeders;

use App\Models\Begalin;
use Illuminate\Database\Seeder;

class BegalinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Begalin::factory(5)->create();
        //
    }
}

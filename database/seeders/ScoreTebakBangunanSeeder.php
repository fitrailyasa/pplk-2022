<?php

namespace Database\Seeders;

use App\Models\ScoreTebakBangunan;
use Illuminate\Database\Seeder;

class ScoreTebakBangunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ScoreTebakBangunan::factory(5)->create();
    }
}

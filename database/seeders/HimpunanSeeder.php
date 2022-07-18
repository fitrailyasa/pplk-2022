<?php

namespace Database\Seeders;

use App\Models\Himpunan;
use Illuminate\Database\Seeder;

class HimpunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Himpunan::factory(5)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ormawa;

class OrmawaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Ormawa::factory(5)->create();
    }
}

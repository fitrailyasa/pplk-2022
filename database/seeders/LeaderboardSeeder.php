<?php

namespace Database\Seeders;

use App\Models\Leaderboard;
use Illuminate\Database\Seeder;

class LeaderboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Leaderboard::factory(165)->create();

        $roles = [
            [
                'kelompok' => 'Juara 1',
                'score' => '3'
            ],
            [
                'kelompok' => 'Juara 2',
                'score' => '2'
            ],
            [
                'kelompok' => 'Juara 3',
                'score' => '1'
            ],

        ];
        Leaderboard::query()->insert($roles);
    }
}

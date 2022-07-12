<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'nama' => 'Backend',
            'email' => 'backend@test.com',
            'password' => '$2y$10$7iK48lGNngPIoMboAb1i5.PuiNGgIK9EheODiKCNBXu4.kx1pk.9.',
            'nim' => 123456789,
            'kelompok' => 100,
            'roles_id' => 1,
            'instagram' => 'instagram.com/',
            'prodis_id' => 1,
            'roles_id' => 1,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'role' => 'SuperAdmin'
            ],
            [
                'id' => 2,
                'role' => 'Admin'
            ],
            [
                'id' => 3,
                'role' => 'Himpunan'
            ],
            [
                'id' => 4,
                'role' => 'Ukm'
            ],
            [
                'id' => 5,
                'role' => 'Kedisplinan'
            ],
            [
                'id' => 6,
                'role' => 'DapMen'
            ],
            [
                'id' => 7,
                'role' => 'Staff'
            ],
            [
                'id' => 8,
                'role' => 'Maba'
            ],
        ];
        Role::query()->insert($roles);
    }
}

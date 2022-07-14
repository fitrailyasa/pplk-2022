<?php

namespace Database\Seeders;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategories = [
            ['kategori'=>'Prodi'],
            ['kategori'=>'Himpunan'],
            ['kategori'=>'UKM']
        ];
        Kategori::query()->insert($kategories);
     //
    }
}

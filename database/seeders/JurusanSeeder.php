<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = [
            [
                'namaLengkap' => 'Jurusan Teknologi Infrastruktur dan Kewilayahan',
                'namaSingkat' => 'JTIK',
                'visi'=>'visi Jurusan JTIK',
                'misi'=>'misi jurusan JTIK',
                'kepalaJurusan' => 'Dr. Rahayu Sulistyorini, S.T., M.T.',
                'ruangJurusan' => 001
            ],
            [
                'namaLengkap' => 'Jurusan Teknologi Produksi dan Industri',
                'namaSingkat' => 'JTPI',
                'visi'=>'visi Jurusan JTPI',
                'misi'=>'misi jurusan JTPI',
                'kepalaJurusan' => 'Prof. Dr. Ir. Deny Juanda Puradimaja, DEA',
                'ruangJurusan' => 'Gedung D Institut Teknologi Sumatera'
            ],
            [
                'namaLengkap' => 'Jurusan Sains',
                'namaSingkat' => 'JS',
                'visi'=>'visi Jurusan JS',
                'misi'=>'misi jurusan JS',
                'kepalaJurusan' => 'L. Hari Wiryanto',
                'ruangJurusan' => 'Gedung F Institut Teknologi Sumatera'
            ]
        ];
        Jurusan::query()->insert($jurusan);

        //
    }
}

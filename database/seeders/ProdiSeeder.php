<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodi = [
            ['namaLengkap' => 'Matematika'],
            ['namaLengkap' => 'Fisika'],
            ['namaLengkap' => 'Kimia'],
            ['namaLengkap' => 'Biologi'],
            ['namaLengkap' => 'Sains Atmosfer & Keplanetan '],
            ['namaLengkap' => 'Farmasi'],
            ['namaLengkap' => 'Sains Lingkungan Kelautan'],
            ['namaLengkap' => 'Sains Aktuaria'],
            ['namaLengkap' => 'Sains Data'],
            ['namaLengkap' => 'Perencanaan Wilayah dan Kota'],
            ['namaLengkap' => 'Teknik Geomatika'],
            ['namaLengkap' => 'Teknik Sipil'],
            ['namaLengkap' => 'Teknik Arsitektur'],
            ['namaLengkap' => 'Teknik Lingkungan'],
            ['namaLengkap' => 'Teknik Kelautan'],
            ['namaLengkap' => 'Desain Komunikasi Visual'],
            ['namaLengkap' => 'Arsitektur Lanskap'],
            ['namaLengkap' => 'Teknik Perkeretaapian'],
            ['namaLengkap' => 'Rekayasa Tata Kelola Air Terpadu'],
            ['namaLengkap' => 'Teknik Elektro'],
            ['namaLengkap' => 'Teknik Fisika'],
            ['namaLengkap' => 'Teknik Informatika'],
            ['namaLengkap' => 'Teknik Geologi'],
            ['namaLengkap' => 'Teknik Geofisika'],
            ['namaLengkap' => 'Teknik Mesin'],
            ['namaLengkap' => 'Teknik Kimia'],
            ['namaLengkap' => 'Teknik Material'],
            ['namaLengkap' => 'Teknik Sistem Energi'],
            ['namaLengkap' => 'Teknik Industri'],
            ['namaLengkap' => 'Teknik Telekomunikasi'],
            ['namaLengkap' => 'Teknik Pertambangan'],
            ['namaLengkap' => 'Teknik Biosistem'],
            ['namaLengkap' => 'Teknik Biomedis'],
            ['namaLengkap' => 'Teknologi Pangan'],
            ['namaLengkap' => 'Teknologi Industri Pertanian'],
            ['namaLengkap' => 'Rekayasa Kehutanan'],
            ['namaLengkap' => 'Rekayasa Kosmetik'],
            ['namaLengkap' => 'Rakayasa Minyak dan Gas'],
            ['namaLengkap' => 'Instrumentasi dan Automasi']


        ];
        Prodi::query()->insert($prodi);
    }
}

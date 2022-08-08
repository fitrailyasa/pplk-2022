<?php

namespace Database\Seeders;

use App\Models\Funfact;
use Illuminate\Database\Seeder;

class FunfactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $funfact = [
            [
                'isi' => 'Warna almamater ITERA yaitu berwarna hitam'
            ],
            [
                'isi' => 'Belwis merupakan wilayah yang terdapat kos/kontrakan/rumah mayoritas mahasiswa ITERA'
            ],
            [
                'isi' => 'Belwis terkenal dengan makanan dengan harga yang affordable bagi kantong anak kos'
            ],
            [
                'isi' => 'Pada awalnya ITERA pertama kali didirikan tahun 2012 di Kampus ITB, lalu pindah ke Lampung Selatan pada tahun 2014'
            ],
            [
                'isi' => 'Itera disahkan pada 06 oktober 2014 oleh Susilo Bambang Yudhoyono (Presiden RI Periode 2004-2014)'
            ],
            [
                'isi' => 'ITERA dikenal sebagai sebutan Institut Teknologi Supporteran karena mahasiswa yang aktif dalam kegiatan supporter di masing – masing himpunan.'
            ],
            [
                'isi' => 'Embung itera menyajikan view sore hari yang indah yang cocok untuk anak senja
                '
            ],
            [
                'isi' => 'ITERA diresmikan bersamaan dengan ITK (Institut Teknologi Kalimantan) yang berada di Balikpapan
                '
            ],
            [
                'isi' => 'Para mahasiswa angakatan pertama dan kedua melangsungkan perkuliahan di Kampus ITB
                '
            ],
            [
                'isi' => 'Embung A ITERA sering dijadikan tempat berolahraga bagi mahasiswa hingga dosen ITERA bahkan warga luar ITERA karena memiliki beberapa fasilitas yang menunjang
                '
            ],
            [
                'isi' => 'Prioritas utama dari di ITERA yitu Program Studi di bidang Engineering
                '
            ],
            [
                'isi' => 'ITERA memiliki fasilitas GYM Gratis bagi seluruh warga ITERA 
                '
            ],
            [
                'isi' => 'Metode pembayaran di katin ITERA dapat dilakukan dengan cash ataupun cashless
                '
            ],
            [
                'isi' => 'PLTS digunakan sebagai sumber listik alternatif yang disiapkan oleh ITERA dan termasuk terbesar di Indonesia
                '
            ],
            [
                'isi' => 'Mahasiswa ITERA kebanyakan terdapat laki – laki yang berambut gondrong yang sering disebut “gondrongers”
                '
            ],
            [
                'isi' => 'ITERA menjadi salah satu kampus yang mengadakan event tingkat Internasional
                '
            ],
            [
                'isi' => 'Lahan itera memiliki luasan sebesar 275 Ha
                '
            ],
            [
                'isi' => 'ITERA menjadi satu – satunya Institut Teknik di Sumatera
                '
            ],
            [
                'isi' => 'Kurikulum yang terdapat di ITERA tidak jauh berbeda dengan ITB
                '
            ],
            [
                'isi' => 'Bus di ITERA menjadi transportasi yang menunjang perjalanan mahasiswa
                '
            ],
            [
                'isi' => 'ITERA menjalin kerjasama dengan seluruh pemerintah provinsi di Sumatera
                '
            ],
            [
                'isi' => 'Sumatera Utara menjadi wilayah asal sebagian besar mahasiswa perantau di ITERA
                '
            ],
            [
                'isi' => '“Galeri” merupakan sebutan untuk mini swalayan yang terdapat di ITERA
                '
            ],
            [
                'isi' => 'Entah error  pada sistem atau bukan, jika kita ingin ke beberapa lantai menggunakan lift gedung GKU, kita harus memencet 1 angka  lebih kecil pada lantai yang kita ingin tuju (contoh : jika ingin ke lantai 3 kita harus pencet tombol lantai 2) 
                '
            ],
            [
                'isi' => 'ITERA memiliki kebun raya merupakan kebun raya ke-2 yang dibangun dilingkungan kampus dan dapat masuk dengan gratis
                '
            ],
            [
                'isi' => 'ITERA dijuluki sebagai “The Forest Campus”
                '
            ],
            [
                'isi' => 'ITERA memiliki embung sebanyak 6 yaitu Embung A-F
                '
            ],
            [
                'isi' => 'Jenis tanaman yang terdapat pada Kebun Raya ITERA merupakan koleksi dari berbagai daerah di Indonesia bahkan sampai Luar Negeri
                '
            ],
            [
                'isi' => 'ITERA identik dengan bentuk bangunannya yang “instagramable”
                '
            ]
        ];
        Funfact::query()->insert($funfact);
    }
}

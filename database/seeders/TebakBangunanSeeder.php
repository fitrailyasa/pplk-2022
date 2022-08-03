<?php

namespace Database\Seeders;

use App\Models\Tebak_bangunan;
use Illuminate\Database\Seeder;

class TebakBangunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soal=[
            ['namaBangunan'=>'Gedung E',
             'soal'=>'Apakah nama gedung ini?',
             'jawabanBenar'=>'Gedung E',
             'jawabanA'=>'Gedung A',
             'jawabanB'=>'Gedung B',
             'jawabanC'=>'Gedung D',
             'jawabanD'=>'Gedung E'],

             ['namaBangunan'=>'Gedung B',
             'soal'=>'Apakah nama gedung ini?',
             'jawabanBenar'=>'Gedung B',
             'jawabanA'=>'Gedung B',
             'jawabanB'=>'Gedung A',
             'jawabanC'=>'Gedung Kuliah Umum',
             'jawabanD'=>'Gedung Labtek 2'],

             ['namaBangunan'=>'Gedung E',
             'soal'=>'Apakah nama gedung ini?',
             'jawabanBenar'=>'Gedung E',
             'jawabanA'=>'Gedung A',
             'jawabanB'=>'Gedung B',
             'jawabanC'=>'Gedung D',
             'jawabanD'=>'Gedung E'],

             ['namaBangunan'=>'Asrama TB3',
             'soal'=>'Apakah nama gedung ini?',
             'jawabanBenar'=>'Asrama TB3',
             'jawabanA'=>'Asrama TB1',
             'jawabanB'=>'Asrama TB2',
             'jawabanC'=>'Asrama TB3',
             'jawabanD'=>'Asrama TB4'],

             ['namaBangunan'=>'Asrama TB4',
             'soal'=>'Apakah nama gedung ini?',
             'jawabanBenar'=>'Asrama TB3',
             'jawabanA'=>'Asrama TB1',
             'jawabanB'=>'Asrama TB2',
             'jawabanC'=>'Asrama TB3',
             'jawabanD'=>'Asrama TB4'],

             ['namaBangunan'=>'RIMA',
             'soal'=>'Apakah nama gedung ini?',
             'jawabanBenar'=>'Gedung Rumah Ibadah Multiagama',
             'jawabanA'=>'Gedung Serba Guna',
             'jawabanB'=>'Gedung Rumah Ibadah Multiagama',
             'jawabanC'=>'Gedung Asrama ITERA',
             'jawabanD'=>'Gedung Bandar Lampung'],

             ['namaBangunan'=>'KebunRaya',
             'soal'=>'Dimana tempat ini terletak?',
             'jawabanBenar'=>'Kebun Raya ITERA',
             'jawabanA'=>'Belakang Gedung C',
             'jawabanB'=>'Samping Gedung Kembar',
             'jawabanC'=>'Kebun Raya ITERA',
             'jawabanD'=>'OAIL'],

             ['namaBangunan'=>'Galeri',
             'soal'=>'Apa nama bangunan berikut ?',
             'jawabanBenar'=>'Galeri ITERA',
             'jawabanA'=>'Galeri ITERA',
             'jawabanB'=>'Kantin ITERA',
             'jawabanC'=>'BKL ITERA',
             'jawabanD'=>'Supermarket ITERA'],

             ['namaBangunan'=>'BKL',
             'soal'=>'Apakah nama fasilitas diatas ?',
             'jawabanBenar'=>'BKL ITERA',
             'jawabanA'=>'Galeri ITERA',
             'jawabanB'=>'Kantin ITERA',
             'jawabanC'=>'BKL ITERA',
             'jawabanD'=>'Supermarket ITERA'],

             ['namaBangunan'=>'MasjidBaitulIlmi',
             'soal'=>'Masjid ini berdekatan dengan ?',
             'jawabanBenar'=>'Gedung C dan Gedung D',
             'jawabanA'=>'Asrama TPB ITERA',
             'jawabanB'=>'Gedung C dan Gedung D',
             'jawabanC'=>'Labirin Kuning',
             'jawabanD'=>'Galeri ITERA'],


             ['namaBangunan'=>'RIMA',
             'soal'=>'Gedung apakah ini ?',
             'jawabanBenar'=>'Gedung Rumah Ibadah multiagama',
             'jawabanA'=>'Gedung Serbaguna',
             'jawabanB'=>'Gedung Rumah Ibadah Multiagama',
             'jawabanC'=>'Gedung Asrama ITERA',
             'jawabanD'=>'Gedung Bandar Lampung'],

             ['namaBangunan'=>'Labtek1',
             'soal'=>'Apa nama gedung ini?',
             'jawabanBenar'=>'Gedung Labtek 1',
             'jawabanA'=>'Gedung A',
             'jawabanB'=>'Gedung B',
             'jawabanC'=>'Gedung Labtek 1',
             'jawabanD'=>'Gedung Labtek 5'],

             ['namaBangunan'=>'Labtek2',
             'soal'=>'Apa nama gedung ini?',
             'jawabanBenar'=>'Gedung Labtek 2',
             'jawabanA'=>'Gedung Labtek 3',
             'jawabanB'=>'Gedung Labtek 5',
             'jawabanC'=>'Gedung Labtek 2',
             'jawabanD'=>'Gedung A'],

             ['namaBangunan'=>'Labtek3',
             'soal'=>'Apa nama gedung ini?',
             'jawabanBenar'=>'Gedung Labtek 3',
             'jawabanA'=>'Gedung A',
             'jawabanB'=>'Gedung Labtek 3',
             'jawabanC'=>'Gedung B',
             'jawabanD'=>'Gedung Labtek 2'],

             ['namaBangunan'=>'Labtek5',
             'soal'=>'Apa nama gedung ini?',
             'jawabanBenar'=>'Gedung Labtek 5',
             'jawabanA'=>'Gedung Labtek 1',
             'jawabanB'=>'Gedung B',
             'jawabanC'=>'Gedung D',
             'jawabanD'=>'Gedung Labtek 5'],

             ['namaBangunan'=>'GedungA',
             'soal'=>'Apa nama gedung ini?',
             'jawabanBenar'=>'Gedung A',
             'jawabanA'=>'Gedung A',
             'jawabanB'=>'Gedung B',
             'jawabanC'=>'Gedung D',
             'jawabanD'=>'Gedung Labtek 5'],
             
             ['namaBangunan'=>'KebunRaya',
             'soal'=>'Gambar di atas terletak di .....',
             'jawabanBenar'=>'Kebun Raya ITERA',
             'jawabanA'=>'Belakang Embu C',
             'jawabanB'=>'Samping Gedung Kembar',
             'jawabanC'=>'Kebun Raya ITERA',
             'jawabanD'=>'OAIL'],

             ['namaBangunan'=>'MasjidAtTanwir',
             'soal'=>'Masjid ini terletak berdekatan dengan ?',
             'jawabanBenar'=>'Asrama TPB ITERA',
             'jawabanA'=>'Asrama TPB ITERA',
             'jawabanB'=>'Gedung C dan D',
             'jawabanC'=>'Lamban Kuning',
             'jawabanD'=>'Rumah Sakit Airan'],

             ['namaBangunan'=>'GedungF',
             'soal'=>'Gedung ini terletak di dekat OAIL,gedung apakah ini? ',
             'jawabanBenar'=>'Gedung F',
             'jawabanA'=>'Galeri',
             'jawabanB'=>'Poliklinik',
             'jawabanC'=>'Gedung C dan D',
             'jawabanD'=>'Gedung F'],

             ['namaBangunan'=>'Kantin1',
             'soal'=>'Gedung ini terletak di dekat OAIL,gedung apakah ini? ',
             'jawabanBenar'=>'Belakang Gedung GKU',
             'jawabanA'=>'Belakang Gedung GKU',
             'jawabanB'=>'Dekat Lapangan Bola ITERA',
             'jawabanC'=>'Dekat Masjid Baitul Ilmi',
             'jawabanD'=>'Belakang OAIL'],

             ['namaBangunan'=>'GKU',
             'soal'=>'Apa nama gedung ini?',
             'jawabanBenar'=>'Gedung GKU',
             'jawabanA'=>'Gedung GKU',
             'jawabanB'=>'Gedung Labtek 1',
             'jawabanC'=>'Gedung Labtek 3',
             'jawabanD'=>'Gedung Labtek 2']
        ];


        
        Tebak_bangunan::query()->insert($soal);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Kamusgaul;
use Illuminate\Database\Seeder;

class KamusgaulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Kamusgaul = [
            [
                'gaul' =>'Basing',
                'asli' => 'Terserah',
                'contohPenggunaan' => 'Basing Lo aja Diws, Gua mah ngikut aja',
            ],
            [
                'gaul' =>'LuOrang KamuOrang',
                'asli' => 'Kalian',
                'contohPenggunaan' => 'Lu orang pada mau ikut maen sama Atha ga besok?',
            ],
            [
                'gaul' =>'Kita Orang',
                'asli' => 'Kita / Kami',
                'contohPenggunaan' => 'Kita orang pulang duluan ya, nanti nyusul aja ke rumah Faza',
            ],
            [
                'gaul' =>'Cun',
                'asli' => 'Ngerti',
                'contohPenggunaan' => 'Gimana? lo udah cun belom sama tugas yang baru dikasih sama dosen?',
            ],
            [
                'gaul' =>'Geh',
                'asli' => 'Dong',
                'contohPenggunaan' => 'Ayok geh, kita kesana rame-rame',
            ],
            [
                'gaul' =>'Mengkol',
                'asli' => 'Belok',
                'contohPenggunaan' => 'Mengkol kanan Bang, Kosan Bang Fitra digang itu! ',
            ],
            [
                'gaul' =>'Gupek',
                'asli' => 'Panik',
                'contohPenggunaan' => 'Gupek betul ngerjainnya , santai aja kali Ted',
            ],
            [
                'gaul' =>'Susuk',
                'asli' => 'Uang Kembalian',
                'contohPenggunaan' => 'Susuk saya belum dikasih Bu',
            ],
            [
                'gaul' =>'Jojong',
                'asli' => 'Santai',
                'contohPenggunaan' => 'Jojong aja masuk rumahnya, Anggep aja rumah sendiri',
            ],
            [
                'gaul' =>'Kyay - Yai',
                'asli' => 'Abang',
                'contohPenggunaan' => 'Yay. Tolong beliin Zahra martabak sih',
            ],
            [
                'gaul' =>'Mengan Pay',
                'asli' => 'Makan Dulu',
                'contohPenggunaan' => 'Mengan Pay kamu itu, nanti sakit lagi',
            ],
            [
                'gaul' =>'Labas',
                'asli' => 'Kelewat / Melanjutkan saja',
                'contohPenggunaan' => 'Bang Hans, Ini kelabasan harusnya mengkol kanan',
            ],
            [
                'gaul' =>'Pipet',
                'asli' => 'Sedotan',
                'contohPenggunaan' => 'Bagi pipetnya geh',
            ],
            [
                'gaul' =>'Kongek / Ngongek',
                'asli' => 'Jadi Bahan Omongan / Ngomongin Orang',
                'contohPenggunaan' => 'Buset, Gua dikongek abis-abisan sama Adiw',
            ],
            [
                'gaul' =>'Yai',
                'asli' => 'Kakek',
                'contohPenggunaan' => 'Liburan nanti kita pulang kampung yuk, Aku udah kangen nih sama yai',
            ],
            [
                'gaul' =>'Ngepek',
                'asli' => 'Mencontek',
                'contohPenggunaan' => 'Bro, Gua ngepek ulangan kimia ya. Gua ga belajar kemaren',
            ],
            [
                'gaul' =>'Ngotak',
                'asli' => 'Belaju / Tidak Mikir',
                'contohPenggunaan' => 'Gausah NGOTAK lu jadi orang!',
            ],
            [
                'gaul' =>'Setahanan',
                'asli' => 'Berdebat / Sama-sama egois',
                'contohPenggunaan' => 'Diaorang berantem ga selesai-selesai, saling setahanan',
            ],
            [
                'gaul' =>'Mak Jelas',
                'asli' => 'Tidak Jelas',
                'contohPenggunaan' => 'Lo ngomong apasih ? Mak jelas?',
            ],
            [
                'gaul' =>'Unjal',
                'asli' => 'Mengakut Barat Satu Persatu',
                'contohPenggunaan' => 'Yaudah, itu barangnya diunjal aja pake motor Ibnu, biar cepet',
            ],
            [
                'gaul' =>'Paleng',
                'asli' => 'Pusing Sampai Ingin Marah',
                'contohPenggunaan' => 'Dasar tuh orang bikin paleng aja',
            ],
            [
                'gaul' =>'Ngeh',
                'asli' => 'Mengerti / Paham',
                'contohPenggunaan' => 'Gua baru ngeh kalo si Nopri itu pacaran',
            ],
            [
                'gaul' =>'Laju',
                'asli' => 'Terus',
                'contohPenggunaan' => 'Karena udah beda circle, Laju ga nyapa kita orang lagi',
            ],
            [
                'gaul' =>'Jejek',
                'asli' => 'Injak',
                'contohPenggunaan' => 'Gausah ngeyel jadi orang, gua jejek juga nanti',
            ],
            [
                'gaul' =>'Ngengkeng',
                'asli' => 'Bebal',
                'contohPenggunaan' => 'Lo ini ngengkeng bener kalo dikasih tau',
            ],
            [
                'gaul' =>'Mapas',
                'asli' => 'Terkejut Akan Suatu Hal',
                'contohPenggunaan' => 'Mapas... Nilai MTK Bang Maul 100 Bro',
            ],
            [
                'gaul' =>'Ligat',
                'asli' => 'Cepat / Gesit',
                'contohPenggunaan' => 'Ligat Woi jangan kelamaan,udah telat nih',
            ],
        ];
        Kamusgaul::query()->insert($Kamusgaul);
    }
}

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
                'visi' => 'Menjadi Jurusan yang unggul dan berkualitas di bidang IPTEK dan berkontribusi pada pemberdayaan potensi yang ada di wilayah Sumatera khususnya dan Indonesia serta dunia umunya.',
                'misi' => '1. Berkontribusi pada penyelengaraan program akademik, vokasi, dan profesi dilandasi dengan program kegiatan Pendidikan, penelitian dan pengabdian pada masyarakat yang terpadu dan berbasis teknologi untuk pemberdayaan potensi sumber daya alam di Sumatera.
                2. Berkontribusi pada pengembangan SDM yang unggul, berkualitas menguasai IPTEK, disamping memiliki karakter kewirausahaan yang baik.',
                'kepalaJurusan' => 'Dr. Rahayu Sulistyorini, S.T., M.T.',
                'ruangJurusan' => 'Gedung F 111, Institut Teknologi Sumatera Jalan Terusan Ryacudu, Way Hui, Kecamatan Jati Agung, Lampung Selatan 35365.'
            ],
            [
                'namaLengkap' => 'Jurusan Teknologi Produksi dan Industri',
                'namaSingkat' => 'JTPI',
                'visi' => 'Jurusan yang berkontribusi unggul pada pendidikan tinggi sumber daya manusia dan inovasi dalam teknologi produksi dan pengelolaan sumber daya alam di Sumatera secara khusus dan Indonesia secara umum untuk menajuan ekonomi dan kesejahteraan yang berkelanjutan di era Revolusi Industri 4.0.',
                'misi' => '1. Melaksanakan dan mengembangkan pendidikan tinggi terutama bidang teknologi produksi dan industri untuk menyiapkan lulusan yang siap menggunakan, mengembangkan, dan menerapkan ilmu teknologi yang berkarakter.
                2. Melakukan kegiatan penelitian dan pegabdian kepada masyarakat yang dapat menghasilkan pengembangan teknologi bidang produksi dan industri yang tanggap terhadap lokal maupun global.
                3. Pengelolaan dan pengembangan potensi wilayah sekitar Sumatera khususnya dan Indonesia secara umumnya dalam bidang produksi dan industri melalui kegiatan pendidikan, penelitian, dan pengabdian kepada masyarakat melalui kerja sama dengan pihak-pihak yang terkait.
                4. Menjalankan, menstimulasi, dan mengelola kerja sama pendidikan, penelitian, dan pengembangan kelompok penelitian yang menjangkarkan wilayah Sumatera sebagai pusat kemajuan Indonesia untuk menjangkau kontribusi di tingkat nasional, regional ASEAN, Asia, dan dunia di era Revolusi Industri 4.0.',
                'kepalaJurusan' => 'Prof. Dr. Ir. Deny Juanda Puradimaja, DEA',
                'ruangJurusan' => 'Gedung D Institut Teknologi Sumatera. Jl. Terusan Ryacudu, Way Huwi, Kec. Jati Agung, Kabupaten Lampung Selatan, Lampung 35365.'
            ],
            [
                'namaLengkap' => 'Jurusan Sains',
                'namaSingkat' => 'JS',
                'visi' => 'Menjadi perguruan tinggi yang unggul, bermartabat, mandiri dan diakui dunia, serta berkontribusi dalam perubahan yang mampu meningkatkan kesejahteraan bangsa Indonesia dan dunia dengan memberdayakan potensi yang ada di wilayah Sumatera dan Sekitarnya.',
                'misi' => '1. Menyelenggarakan dan mengambangkan 
                pendidikan tinggi sains yang mencakup pengembangan teknologi serta menjadi landasan pengembangan teknologi dalam upaya menghasilkan lulusan yang memahami, mengembangkan, menerapkan ilmu sains yang berkarakter.
                2. Menyelenggarakan dan mengembangkan kegiatan penelitian dan pengabdian masyarakat untuk mendorong peningkatan sains mencakup pengembangan teknologi serta menjadi landasan dalam pengembangan teknologi yang inovatif dan tanggap terhadap tantangan lokal maupun global.
                3. Pemberdayaan potensi wilayah sekitar Sumatera secara optimal melalui keunggulan dalam pendidikan, penelitian, dan pengabdian kepada masyarakat melalui kerjasama dengan stakeholder terkait.',
                'kepalaJurusan' => 'L. Hari Wiryanto',
                'ruangJurusan' => 'Gedung F 107, Institut Teknologi Sumatera | Jalan Terusan Ryacudu, Way Huwi, Kecamatan Jati Agung, Kabupaten Lampung Selatan, Lampung 35365.'
            ]
        ];
        Jurusan::query()->insert($jurusan);

        //
    }
}

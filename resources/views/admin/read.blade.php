<!--READ DATA-->
<section>
    <!--User-->
    <div class="col-lg-12 col-lg-12 form-wrapper tabcontents" style="display: none"  id="tambah-user">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data User</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="#" enctype='multipart/form-data'>
        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama User</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Lengkap" name="namauser" id="namauser" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="adi@gg.com" name="email" id="email" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">NIM</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" name="nim" id="nim" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Kelompok</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" placeholder="Kelompok" name="kelompok" id="kelompok"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Program Studi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="prodi" id="prodi"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">No Telepon</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="628...." name="telepon" id="telepon"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Golongan Darah</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Golongan Darah" name="golongandarah" id="golongandarah" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Instagram</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="username tanpa (@)" name="instagram" id="instagram" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Riwayat Penyakit</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area penyakit" placeholder="Riwayat Penyakit" name="riwayat" id="riwayat"  ></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary ">Tambah</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!--./User-->

    <!--ITERA-->
    <div class="col-lg-12 col-lg-12 form-wrapper tabcontents" style="display: none"  id="tambah-upt">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data UPT ITERA</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="#" enctype='multipart/form-data'>
        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama UPT</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama UPT ITERA" name="namaupt" id="namaupt" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area deskripsi" placeholder="Deskripsi UPT" name="deskripsi" id="deskripsi"  ></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary ">Tambah</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!--./ITERA-->

    <!--Prodi-->
    <div class="col-lg-12 col-lg-12 form-wrapper tabcontents" style="display: none"  id="tambah-prodi">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data Prodi</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="#" enctype='multipart/form-data'>
        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Prodi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Prodi" name="namaprodi" id="namaprodi" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Kepala Prodi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Kepala Prodi" name="namakaprodi" id="namakaprodi" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Akreditasi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Akreditasi" name="akreditasi" id="akreditasi" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Ruang Prodi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Ruang Prodi" name="ruangprodi" id="ruangprodi"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Tahun Berdiri</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="tahunBerdiri" id="tahunBerdiri"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Jumlah Mahasiswa</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Kode Warna" name="kodeWarna" id="kodeWarna"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Visi</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area visi" placeholder="Visi" name="visi" id="visi"  ></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Misi</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area misi" placeholder="Misi" name="misi" id="misi"  ></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Logo</label>
            <div class="col-sm-9">
              <input type="file" accept="image/*" class="form-control" name="logo" id="logo" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Tentang Kami</label>
            <div class="col-sm-9 ">
              <textarea class="form-control custom-txt-area" placeholder="Tentang Kami" name="tentangkami" id="tentangkami"  ></textarea>
            </div>
          </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Prestasi</label>
              <div class="col-sm-9 mb-3">
                <textarea class="form-control custom-txt-area misi" placeholder="Tahun 2020" name="prestasi" id="prestasi"  ></textarea>
                <textarea class="form-control custom-txt-area misi" placeholder="Tahun 2021" name="prestasi" id="prestasi"  ></textarea>
                <textarea class="form-control custom-txt-area misi" placeholder="Tahun 2022" name="prestasi" id="prestasi"  ></textarea>
              </div>
            </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary ">Tambah</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!--./Prodi-->

    <!--Himpunan-->
    <div class="col-lg-12 col-lg-12 form-wrapper tabcontents" style="display: none"  id="tambah-himpunan">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data Himpunan</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="#" enctype='multipart/form-data'>
        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Lengkap" name="namaLengkap" id="namaLengkap" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Singkat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Singkat" name="namaSingkat" id="namaSingkat" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Pembina</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Pembina" name="pembina" id="pembina" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Ketua Himpunan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Ketua Himpunan" name="ketuaHimpunan" id="ketuaHimpunan"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Tahun Berdiri</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="tahunBerdiri" id="tahunBerdiri"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Kode Warna</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Kode Warna" name="kodeWarna" id="kodeWarna"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Visi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Visi" name="visi" id="visi" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Misi</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area misi" placeholder="Misi" name="misi" id="misi"  ></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Logo</label>
            <div class="col-sm-9">
              <input type="file" accept="image/*" class="form-control" name="logo" id="logo" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Filosofi Logo</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Filosofi Logo" name="filosofiLogo" id="filosofiLogo" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-9 ">
              <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="deskripsi" id="deskripsi"  ></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary ">Tambah</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!--./Himpunan-->

    <!--UKM/Komunitas-->
    <div class="col-lg-12 col-lg-12 form-wrapper tabcontents" style="display: none"  id="tambah-ukm">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data UKM/Komunitas</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="#" enctype='multipart/form-data'>
          @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Pembina" name="namaLengkap" id="namalengkap" required>
            </div>
          </div>   
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Singkat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Pembina" name="namaSingkat" id="namasingkat" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Visi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Pembina" name="visi" id="visi" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Misi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Pembina" name="misi" id="misi" required>
            </div>
          </div>    
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Pembina</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Pembina" name="pembina" id="namapembina" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Ketua Umum</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Ketua Umum" name="ketuaUmum" id="ketuaumum" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Dies Natalis</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Dies Natalis" name="tahunBerdiri" id="diesnatalis" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Logo</label>
            <div class="col-sm-9">
              <input type="text" accept="image/*" class="form-control" name="logo" id="logo" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Filosofi Logo</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Filosofi Logo" name="filosofiLogo" id="filosofiLogo"  ></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">QR-Code</label>
            <div class="col-sm-9 ">
              <input type="text" class="form-control" placeholder="Input https://linktr.ee" name="qrCode" id="qrcode" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Pembina" name="deskripsi" id="deskripsi" required>
            </div>
          </div> 
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Dokumentasi 1</label>
            <div class="col-sm-9">
              <input type="text" accept="image/*" class="form-control" name="dukumentasi1" id="dokumentasi1" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Dokumentasi 2</label>
            <div class="col-sm-9">
              <input type="text" accept="image/*" class="form-control" name="dokumentasi2" id="dokumentasi2" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Dokumentasi 3</label>
            <div class="col-sm-9">
              <input type="text" accept="image/*" class="form-control" name="dokumentasi3" id="dokumentasi3" >
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary ">Tambah</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!--./UKM/Komunitas-->

    <!--Funfact-->
    <div class="col-lg-12 col-lg-12 form-wrapper tabcontents" style="display: none"  id="tambah-funfact">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Funfact</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="#" enctype='multipart/form-data'>
        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="isi" id="" required></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary ">Tambah</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!--./Funfact-->

    <!--Begalin-->
    <div class="col-lg-12 col-lg-12 form-wrapper tabcontents" style="display: none"  id="tambah-begalin">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data Begalin</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="#" enctype='multipart/form-data'>
        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Artikel Singkat</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Artikel Singkat..." name="judul" id="singkat" required></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Artikel Lengkap</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Artikel Lengkap" name="isi" id="lengkap" required></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary ">Tambah</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!--./Begalin-->

    <!--Kamus Gaul-->
    <div class="col-lg-12 col-lg-12 form-wrapper tabcontents" style="display: none"  id="tambah-kamus">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data Kamus Gaul</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="#" enctype='multipart/form-data'>
        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Kamus Gaul</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Kamus Gaul" name="kamus" id="kamus" required></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Arti Kamus</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Arti Kamus" name="arti-kamus" id="arti-kamus" required></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary ">Tambah</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!--./Kamus Gaul-->

    <!--Games redeem code-->
    <div class="col-lg-12 col-lg-12 form-wrapper tabcontents" style="display: none"  id="tambah-redeem">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Input Data Redeem Code</h4>
        </div>
        <div class="card-body">
        <form method="POST" action="#" enctype='multipart/form-data'>
        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Input nama item" name="namaitem" id="namaitem" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Kode</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Kode item" name="Kode item" id="Kode item" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nilai</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nilai point item" name="nilaiitem" id="nilaiitem" required>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary ">Tambah</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!--./Games redeem code-->

    <!--Games Tebak-->
    <div class="col-lg-12 col-lg-12 form-wrapper tabcontents" style="display: none"  id="tambah-tebak">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data Tebak Bangunan</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="#" enctype='multipart/form-data'>
          @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Input nama item" name="namaitem" id="namaitem" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Kode</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Kode item" name="Kode item" id="Kode item" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nilai</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nilai point item" name="nilaiitem" id="nilaiitem" required>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary ">Tambah</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!--./Games Tebak-->

    <!--Booklet-->
    <div class="col-lg-12 col-lg-12 form-wrapper tabcontents" style="display: none"  id="tambah-booklet">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Input Data Booklet</h4>
        </div>
        <div class="card-body">
          <form method="POST" action="#" enctype='multipart/form-data'>
          @csrf
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Judul Booklet</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Judul Booklet" name="judulbooklet" id="judulbooklet" required>
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Deskripsi Booklet</label>
              <div class="col-sm-9">
                <textarea class="form-control custom-txt-area" placeholder="Deskripsi Booklet..." name="deskripsibooklet" id="deskripsibooklet" required></textarea>
              </div>
            </div>
            <div class="mb-3 row">
              <div class="col-sm-9">
                <button type="submit" class="btn btn-primary ">Tambah</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--./Booklet-->
</section>
<!--./READ DATA-->
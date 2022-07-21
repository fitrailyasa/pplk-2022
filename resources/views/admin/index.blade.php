@extends('layouts.admin.modal')
@extends('layouts.admin.app')

@section('title', 'CMS')

@section('content')

<!-- MAIN CONTENT -->

    <!--Dashboard-->
    <div class="col-xl-12 col-lg-12 form-wrapper tabcontents" id="dashboard" >
      <div class="row">
        <div class="col-md">
          <div class="widget-stat card" style="background: #FF6565;">
            <div class="card-body p-4">
              <div class="media">
              <div class="media-body text-white text-end">
                <p class="mb-1">Total Mahasiswa</p>
                <h3 class="text-white">5451</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="widget-stat card" style="background: #58ED67;">
          <div class="card-body p-4">
            <div class="media">
              <div class="media-body text-white text-end">
                <p class="mb-1">Total Panitia</p>
                <h3 class="text-white">984</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="widget-stat card" style="background: #FF659C;">
          <div class="card-body p-4">
            <div class="media">
              <div class="media-body text-white text-end">
                <p class="mb-1">Total Himpunan</p>
                <h3 class="text-white">36</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-md">
          <div class="widget-stat card" style="background: #9665FF;">
            <div class="card-body p-4">
              <div class="media">
                <div class="media-body text-white text-end">
                  <p class="mb-1">Total UKM/Komunitas</p>
                  <h3 class="text-white">44</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="widget-stat card" style="background: #6590FF;">
            <div class="card-body p-4">
              <div class="media">
                <div class="media-body text-white text-end">
                  <p class="mb-1">Total Dapmen</p>
                  <h3 class="text-white">383</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="widget-stat card" style="background: #61DAEB;">
            <div class="card-body p-4">
              <div class="media">
                <div class="media-body text-white text-end">
                  <p class="mb-1">Total Akun</p>
                  <h3 class="text-white">6703</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md">
          <div class="widget-stat card" style="background: #FFA73F;">
            <div class="card-body p-4">
              <div class="media">
                <div class="media-body text-white text-end">
                  <p class="mb-1">Total Kehadiran Maba</p>
                  <h3 class="text-white">5423</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="widget-stat card" style="background: #F458F8;">
            <div class="card-body p-4">
              <div class="media">
                <div class="media-body text-white text-end">
                  <p class="mb-1">Total Kehadiran Panitia</p>
                  <h3 class="text-white">922</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--./Dashboard-->

<!--------------------------------------------------------------------------------->

<!--CREATE DATA-->

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

<!--./CREATE DATA-->

<!--------------------------------------------------------------------------------->

<!--READ & DELETE DATA-->

<section>
    <!--Tabel User-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="kelola-user">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">User</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>NIM</th>
                  <th>Kelompok</th>
                  <th>instagram</th>
                  <th>Qr code</th>
                  <th>Prodi</th>
                  <th>Role</th>
                  <th>More</th>
                </tr>
              </thead>
              @foreach ($users as $user)
              <tbody>

                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $user->nama }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->nim }}</td>
                  <td>{{ $user->kelompok }}</td>
                  <td>{{ $user->instagram }}</td>
                  <td>qrcode.img</td>
                  <td>{{ $user->prodis_id }}</td>
                  <td>{{ $user->roles_id }}</td>

                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="{{ url('/admin' . '/' .$user->id) }}" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              @endforeach
              {{-- link paginate --}}
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--./Tabel User-->

    <!--Tabel QR-Code Panitia-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="QR-Code-panitia">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola QR-Code Panitia</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Divisi</th>
                  <th>QR-Code</th>
                  <th>More</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>1</td>
                  <td>Adi Sulaksono</td>
                  <td>120140038</td>
                  <td>Ardhames</td>
                  <td>aw231e#$mawdjmji@#!mawdawf</td>
                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              {{-- link paginate --}}
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--./Tabel QR-Code Panitia-->

    <!--Tabel QR-Code Maba-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="QR-Code-maba">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Data QR-Code Maba</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Kelompok</th>
                  <th>QR-Code</th>
                  <th>More</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>1</td>
                  <td>Adi Sulaksono</td>
                  <td>120140038</td>
                  <td>13</td>
                  <td>aw231e#$mawdjmji@#!mawdawf</td>
                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              {{-- link paginate --}}
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--./Tabel QR-Code Maba-->

    <!--Tabel UPT ITERA-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="kelola-upt">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Data UPT ITERA</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama UPT</th>
                  <th>Deskripsi</th>
                </tr>
              </thead>
              @foreach ($upts as $upt)
              <tbody>
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$upt->nama}}</td>
                  <td>{{$upt->deskripsi}}</td>
                  <td class="manage-row">
                  <a onclick="openCMS(event, 'edit-upt')" class="nav-link tablinks">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              @endforeach
              {{-- link paginate --}}
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--./Tabel UPT ITERA-->

    <!--Tabel Prodi-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="kelola-prodi">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Data Prodi</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lenkap</th>
                    <th>Nama Singkat</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Deskripsi</th>
                    <th>Kepala Prodi</th>
                    <th>akreditasi</th>
                    <th>tahun Berdiri</th>
                    <th>jumlah Mahasiswa</th>
                    <th>diagram alir</th>
                    <th>More</th>
                </tr>
              </thead>
              @foreach ($prodis as $prodi)
              <tbody>

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $prodi->namaLengkap }}</td>
                    <td>{{ $prodi->namaSingkat }}</td>
                    <td>{{ $prodi->visi }}</td>
                    <td>{{ $prodi->misi }}</td>
                    <td>{{ $prodi->deskripsi }}</td>
                    <td>{{ $prodi->kepalaProdi }}</td>
                    <td>{{ $prodi->akreditasi }}</td>
                    <td>{{ $prodi->tahunBerdiri }}</td>
                    <td>{{ $prodi->jumlahMahasiswa }}</td>
                    <td><img src=" #" widht="100" height="100"/></td>
                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              @endforeach
              {{-- link paginate --}}
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--./Tabel Prodi-->

    <!--Tabel Himpunan-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="kelola-himpunan">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Data Himpunan</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Singkat</th>
                  <th>Nama Lengkap</th>
                  <th>Visi</th>
                  <th>Misi</th>
                  <th>Deskripsi</th>
                  <th>Kode Warna</th>
                  <th>Pembina</th>
                  <th>Ketua Himpunan</th>
                  <th>Logo</th>
                  <th>Filosofi Logo</th>
                  <th>Kode Warna</th>
                  <th>Tahun Berdiri</th>
                  <th>More</th>
                </tr>
              </thead>
              @foreach ($himpunans as $himpunan)
              <tbody>

                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $himpunan->namaSingkat }}</td>
                  <td>{{ $himpunan->namaLengkap }}</td>
                  <td>{{ $himpunan->visi }}</td>
                  <td>{{ $himpunan->misi }}</td>
                  <td>{{ $himpunan->deskripsi }}</td>
                  <td>{{ $himpunan->kodeWarna }}</td>
                  <td>{{ $himpunan->pembina }}</td>
                  <td>{{ $himpunan->ketuaHimpunan }}</td>
                  <td>{{ $himpunan->tahunBerdiri }}</td>
                  <td>{{ $himpunan->logo }}</td>
                  <td>{{ $himpunan->filosofiLogo }}</td>
                  <td>{{ $himpunan->tahunBerdiri }}</td>
                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              @endforeach
              {{-- link paginate --}}
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--./Tabel Himpunan-->

    <!--Tabel Kabinet-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="kelola-kabinet">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Data Kabinet KM ITERA</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Deskripsi</th>
                  <th>Presiden Mahasiswa</th>
                  <th>Sekretaris Jenderal</th>
                  <th>Organigram</th>
                  <th>Logo</th>
                  <th>Filosopi Logo</th>
                  <th>Website</th>
                  <th>Facebook</th>
                  <th>Telegram</th>
                  <th>Youtube</th>
                  <th>Instagram</th>
                  <th>Perkenalan Youtube</th>
                  <th>Visi</th>
                  <th>Misi</th>
                  <th>Organigram</th>
                  <th>More</th>
                </tr>
              </thead>
              @foreach ($kabinets as $kabinet)
              <tbody>

                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $kabinet->nama }}</td>
                  <td>{{ $kabinet->deskripsi }}</td>
                  <td>{{ $kabinet->presiden }}</td>
                  <td>{{ $kabinet->sekjen }}</td>
                  <td>{{ $kabinet->organigram }}</td>
                  <td>{{ $kabinet->logo }}</td>
                  <td>{{ $kabinet->filosofiLogo }}</td>
                  <td>dies natalis</td>
                  <td>https://km.itera.ac.id</td>
                  <td>https://facebook.com</td>
                  <td>https://te.me</td>
                  <td>https://youtu.be</td>
                  <td>https://instagram.com</td>
                  <td>https://youtube/linkperkenalanKM.com</td>
                  <td>Visi</td>
                  <td>Misi</td>
                  <td><img src=" #" widht="100" height="100"/></td>
                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              @endforeach
              {{-- link paginate --}}
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--./Tabel Kabinet-->

    <!--Tabel Senat-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="kelola-senat">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Data Senat KM ITERA</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ketua</th>
                  <th>deskripsi</th>
                  <th>website</th>
                  <th>youtube</th>
                  <th>Facebook</th>
                  <th>Telegram</th>
                  <th>Youtube</th>
                  <th>Instagram</th>
                  <th>More</th>
                </tr>
              </thead>
              @foreach ($senats as $senat)
              <tbody>

                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $senat->ketua }}</td>
                  <td>{{ $senat->deskripsi }}</td>
                  <td>{{ $senat->website }}</td>
                  <td>{{ $senat->youtube }}</td>
                  <td>{{ $senat->instagram }}</td>
                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              @endforeach
              {{-- link paginate --}}
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--./Tabel Senat-->

    <!--Tabel UKM/Komunitas-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="kelola-ukm">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Data UKM/Komunitas</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Nama Singkat</th>
                  <th>visi </th>
                  <th>misi</th>
                  <th>pembina</th>
                  <th>Ketua Umum</th>
                  <th>Dies Natalis</th>
                  <th>Logo</th>
                  <th>Filosofi Logo</th>
                  <th>QR-Code</th>
                  <th>Dokumentasi1</th>
                  <th>Dokumentasi2</th>
                  <th>Dokumentasi3</th>
                  <th>More</th>
                </tr>
              </thead>
              @foreach ($ukms as $ukm)
              <tbody>
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{ $ukm->namaLengkap}}</td>
                  <td>{{ $ukm->namaSingkat}}</td>
                  <td>{{ $ukm->visi}}</td>
                  <td>{{ $ukm->misi}}</td>
                  <td>{{ $ukm->pembina}}</td>
                  <td>{{ $ukm->ketuaUmum}}</td>
                  <td>{{ $ukm->tahunBerdiri}}</td>
                  <td><img src=" #" widht="100" height="100"/></td>
                  <td>{{ $ukm->filosofiLogo}}</td>
                  <td>aw32#$@aiwjd543</td>
                  <td><img src=" #" widht="100" height="100"/></td>
                  <td><img src=" #" widht="100" height="100"/></td>
                  <td><img src=" #" widht="100" height="100"/></td>
                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              @endforeach
              {{-- link paginate --}}
            </table>

          </div>
        </div>
      </div>
    </div>
    <!--./Tabel UKM/Komunitas-->

    <!--Tabel Funfact-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="kelola-funfact">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Data Funfact</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Deskripsi</th>
                </tr>
              </thead>
              @foreach ($funfacts as $funfact)
              <tbody>

                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $funfact->isi }}</td>
                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              @endforeach
              {{-- link paginate --}}
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--./Tabel Funfact-->

    <!--Tabel Begalin-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="kelola-begalin">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Data Begalin</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>judul</th>
                  <th>isi</th>
                </tr>
              </thead>
              @foreach ($begalins as $begalin)
              <tbody>

                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $begalin->judul }}</td>
                  <td>{{ $begalin->isi }}</td>
                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              @endforeach
              {{-- link paginate --}}
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--./Tabel Begalin-->

    <!--Tabel Kamus Gaul-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="kelola-kamus">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Data Kamus Gaul</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kamus Gaul</th>
                  <th>Arti Kamus</th>
                </tr>
              </thead>
              @foreach ($kamusgauls as $kamusgaul)
              <tbody>

                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $kamusgaul->gaul }}</td>
                  <td>{{  $kamusgaul->asli }}</td>
                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              @endforeach
              {{-- link paginate --}}
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--./Tabel Kamus Gaul-->

    <!--Tabel Redeem Code-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="kelola-redeem">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Data Redeem Code</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kode</th>
                  <th>Nilai</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>1</td>
                  <td>Patung Fitra</td>
                  <td>haj1m0kr1</td>
                  <td>124</td>
                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              {{-- link paginate --}}
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--./Tabel Redeem Code-->

    <!--Tabel Tebak Bangunan-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="kelola-tebak">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Data Tebak Bangunan</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kode</th>
                  <th>Nilai</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>1</td>
                  <td>Patung Fitra</td>
                  <td>k1bt1f1tr4</td>
                  <td>122</td>
                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              {{-- link paginate --}}
            </table>
          </div>
        </div>
                </div>
                    </div>
    <!--./Tabel Tebak Bangunan-->

    <!--Tabel Link Gform-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="kelola-gform">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Data gform</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Link Gform</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>1</td>
                  <td>https://forms.gle</td>
                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              {{-- link paginate --}}
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--./Tabel Link Gform-->

    <!--Tabel Booklet-->
    <div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="display: none"  id="kelola-booklet">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Data Booklet</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul Booklet</th>
                  <th>Deskripsi Booklet</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>1</td>
                  <td>Barang bawaan maba</td>
                  <td>Bazooka, nuklir, sembako, doa ibu</td>
                  <td class="manage-row">
                    <a href=" #" class="edit-button">
                      <i class="fa-solid fa-marker"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm  ">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                          <div class="modal-footer">
                            <form action="#" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
              {{-- link paginate --}}
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--./Tabel Booklet-->

    <!--Scanner Panitia-->
    <div class="tabcontents" style="display: none"  id="scanner-panitia">
      scanner panitia blm fix butuh href
    </div>
    <!--./Scanner Panitia-->

    <!--Scanner Maba-->
    <div class="tabcontents" style="display: none"  id="scanner-maba">
      scanner maba blm fix butuh href
    </div>
    <!--./Scanner Maba-->
</section>

<!--./READ & DELETE DATA-->

<!--------------------------------------------------------------------------------->

<!--UPDATE DATA-->

<section>

</section>

<!--./UPDATE DATA-->

@endsection

@section('script')

<script>
    function editData() {
        document.getElementById('nama-upt').disabled = false;
        document.getElementById('deskripsi-upt').disabled = false;
    }
</script>

@endsection
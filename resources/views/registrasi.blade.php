@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Registrasi')

@section('style')
<!-- STYLES -->
<link rel="stylesheet" href="{{ asset('assets/css/regist.css') }}">
@endsection

@section('content')
<!-- CONTENT -->
<section>
  <!-- Splash Screen -->
  <div class="launch-logo fade" id="splash-screen">
    <img src="../assets/Logo-PPLK.png" alt="launch-logo-pplk" class="launch-logo-image" />
  </div>

  <!-- Outer Container -->
  <div class="container-lg bg-transparent show-up">
    <!-- Image Container -->
    <div class="container-fluid d-flex justify-content-center mt-3 mb-3">
      <!-- Image row and column -->
      <div class="row justify-content-center">
        <div class="col-sm-6 col-md-5 text-center text-wrap" id="image">
          <img class="img-fluid" src="../assets/logo-pplk-minified.png" alt="" />
        </div>
      </div>
    </div>

    <!-- Login -->
    <div class="container-fluid mb-4 rounded pt-3 pb-4" id="login">
      <!-- Sambutan-1 -->
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-5 text-center text-wrap">
          <h2 class="text-white">Selamat Datang di PPLK 2022</h2>
        </div>
      </div>
      <!-- Akhir Sambutan-1 -->

      <!-- Sambutan-2 -->
      <div class="row justify-content-center">
        <div class="col-4 text-center text-wrap">
          <p class="text-white">Mulai Menjelajah sekarang!</p>
        </div>
      </div>
      <!-- Akhir Sambutan-2 -->

      <form method="post" action="{{ url('registrasi/create') }}">
        @csrf
      <!-- Nama -->
      <div class="row justify-content-center align-items-center">
        <div class="col mb-3 d-flex justify-content-center align-items-center">
          <input name="name" type="text" class="form-control rounded input-size" id="name" placeholder="Nama" required autocomplete="off"/>
        </div>
      </div>
      <!-- Akhir Nama -->

      <!-- NIM -->
      <div class="row justify-content-center align-items-center">
        <div class="col mb-3 d-flex justify-content-center align-items-center">
          <input name="nim" type="text" class="form-control rounded input-size" id="nim" placeholder="NIM" required />
        </div>
      </div>
      <!-- Akhir NIM -->

      <!-- Email -->
      <div class="row justify-content-center">
        <div class="col mb-3 d-flex justify-content-center">
          <input name="email" type="email" class="form-control rounded input-size" id="email" placeholder="Email" required />
        </div>
      </div>
      <!-- Akhir Email -->

      <!-- Password -->
      <div class="row justify-content-center">
        <div class="col mb-3 d-flex justify-content-center">
          <input name="password" type="password" class="form-control rounded input-size" id="password" placeholder="Password" required />
        </div>
      </div>
      <!-- Akhir Password -->

      {{-- <!-- Konfirmasi Password -->
      <div class="row justify-content-center">
        <div class="col mb-3 d-flex justify-content-center">
          <input type="password" class="form-control rounded input-size" id="password" placeholder="Konfirmasi Password" required />
        </div>
      </div>
      <!-- Akhir Password --> --}}

      <!-- Divisi -->
      <div class="row justify-content-center align-items-center">
        <div class="col mb-3 d-flex justify-content-center align-items-center">
          <select name="divisi" class="form-select rounded input-size text-secondary" aria-label="Default select example">
            <option selected value="belum_isi">Divisi</option>
            <option value="Ardhames">Ardhames</option>
            <option value="Eriedanus">Eriedanus</option>
            <option value="Galexia">Galexia</option>
            <option value="Arp">Arp</option>
            <option value="MilkyWay">MilkyWay</option>
            <option value="Ardhames">Ardhames</option>
            <option value="Heliodile">Heliodile</option>
            <option value="Harterous">Harterous</option>
            <option value="Zenith">Zenith</option>
            <option value="Krios">Krios</option>
            <option value="Kronos">Kronos</option>
            <option value="Kosmos">Kosmos</option>
            <option value="Sagitarius">Sagitarius</option>
            <option value="Artherius">Artherius</option>
            <option value="Phoenix">Phoenix</option>
            <option value="Cassiopeia">Cassiopeia</option>
            <option value="Sagitarius">Sagitarius</option>
            <option value="Phalosawala">Phalosawala</option>
          </select>
        </div>
      </div>
      <!-- Akhir Divisi -->

      <!-- Instagram -->
      <div class="row justify-content-center align-items-center">
        <div class="col mb-3 d-flex justify-content-center align-items-center">
          <input name="instagram" type="text" class="form-control rounded input-size" id="ig" placeholder="Instagram (tanpa @)" required />
        </div>
      </div>
      <!-- Akhir Instagram -->

      <!-- nohp -->
      <div class="row justify-content-center align-items-center">
        <div class="col mb-3 d-flex justify-content-center align-items-center">
          <input name="nohp" type="text" class="form-control rounded input-size" id="ig" placeholder="Nomor Hp 62-xxx-xxxx-xxxx" required />
        </div>
      </div>
      <!-- nohp -->

      <!-- golongan darah -->
      <div class="row justify-content-center align-items-center">
        <div class="col mb-3 d-flex justify-content-center align-items-center">
          <select placeholder="golonganDarah" name="golonganDarah" class="form-select rounded input-size text-secondary" aria-label="Default select example">
            <option selected value="Belumisi+">Golongan Darah</option>
            <option value="A">A</option>
            <option value="AB">AB</option>
            <option value="B">B</option>
            <option value="O">O</option>
          </select>
        </div>
      </div>
      <!-- golongan darah -->

      <!-- prodi -->
      <div class="row bio-input">
        <label  class="form-label" for="golongan darah">Program Studi</label>
        <select name="prodi">
            <option selected class="selected">{{ $viewbiodata->prodi }}</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="AB">Teknik Electro</option>
            <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Teknik Industri Pertanian">Teknik Industri Pertanian</option>
            <option value="Teknik Geofisika">Teknik Geofisika</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Fisika">Teknik Fisika</option>
            <option value="Teknik Kimia">Teknik Kimia</option>
            <option value="Teknik Biosistem">Teknik Biosistem</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Teknik Kelautan">Teknik Kelautan</option>
            <option value="Teknik Geologi">Teknik Geologi</option>
            <option value="Teknik Geomatika">Teknik Geomatika</option>
            <option value="Teknik Sistem Energi">Teknik Sistem Energi</option>
            <option value="Teknik Material">Teknik Material</option>
            <option value="Tenik Biomedis">Tenik Biomedis</option>
            <option value="Teknik Perkereta Apian">Teknik Perkereta Apian</option>
            <option value="Matematika">Matematika</option>
            <option value="Fisika">Fisika</option>
            <option value="Kimia">Kimia</option>
            <option value="Biologi">Biologi</option>
            <option value="Farmasi">Farmasi</option>
            <option value="Sains Data">Sains Data</option>
            <option value="Teknologi Pangan">Teknologi Pangan</option>
            <option value="Sains Aktuaria">Sains Aktuaria</option>
            <option value="Sains Atmosfer Dan Keplanetan">Sains Atmosfer Dan Keplanetan</option>
            <option value="Sains Kelautan">Sains Kelautan</option>
            <option value="Rekayasa Tata Kelola Air Terpadu">Rekayasa Tata Kelola Air Terpadu</option>
            <option value="Rekayasa Kosmetik">Rekayasa Kosmetik</option>
            <option value="Rekayasa Minyak Dan Gas">Rekayasa Minyak Dan Gas</option>
            <option value="Rekayasa Kehutanan">Rekayasa Kehutanan</option>
            <option value="Rekayasa Instrumentasi Dan Automasi">Rekayasa Instrumentasi Dan Automasi </option>
            <option value="Arsitektur">Arsitektur</option>
            <option value="Perencanaan Wilayah dan Kota">Perencanaan Wilayah dan Kota</option>
            <option value="Arsitektur Lanskap">Arsitektur Lanskap</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            <option value="Industri Pertanian">Industri Pertanian</option>
        </select>
    </div>
      <!-- prodi -->

    <!-- riwayatPenyakit -->
      <div class="row justify-content-center align-items-center">
        <div class="col mb-3 d-flex justify-content-center align-items-center">
          <input name="riwayatPenyakit" type="text" class="form-control rounded input-size" id="ig" placeholder="Riwayat Penyakit" required />
        </div>
      </div>
      <!-- riwayatPenyakit -->

              <!-- roles -->
              <div class="row justify-content-center align-items-center">
                <div class="col mb-3 d-flex justify-content-center align-items-center">
                  <input name="roles" type="text" class="form-control rounded input-size" id="ig" placeholder="staff" readonly value="7" />
                </div>
              </div>
              <!-- roles -->

      <!-- Tombol Daftar -->
      <div class="row justify-content-center">
        <div class="col d-flex justify-content-center">
          <button type="submit" class="btn btn-danger rounded fw-bold" id="masuk">DAFTAR</button>
        </div>
      </div>
      <!-- Akhir Tombol Daftar -->

    </form>
      <div class="row justify-content-center">
        <div class="col-6 d-flex justify-content-center text-center">
      </div>
    </div>
    <!-- Akhir Login -->
    </div>
</section>
@endsection


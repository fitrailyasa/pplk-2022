@extends('layouts.admin.app')

@section('title', 'Tambah User')

@section('content')

<!--User-->
<div class="col-lg-12 col-lg-12 form-wrapper"  id="tambah-user">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data User</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('adminUser.store') }}" enctype='multipart/form-data'>
        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama User</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" id="nama" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="adi@gg.com" name="email" id="email" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
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
            <select name="prodi">
            <option selected class="selected"></option>
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
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">No Telepon</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="628...." name="nomorHp" id="telepon"  >
            </div>
          </div>
          <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Golongan Darah</label>
          <div class="col-sm-9">
              <select name="golonganDarah">
                <option selected class="selected"></option>
                <option value="A">A</option>
                <option value="AB">AB</option>
                <option value="B">B</option>
                <option value="O">O</option>
              </select>
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
              <textarea class="form-control custom-txt-area penyakit" placeholder="Riwayat Penyakit" name="riwayatPenyakit" id="riwayat"  ></textarea>
            </div>
          </div>
          <div class="mb-3 row">
    
            <label class="col-sm-3 col-form-label">Roles ID</label>
              <div class="col-sm-9">
              <select style="width:100px;" selected class="selected" name="roles_id">
                <option value="1" >Super Admin</option>
                <option value="2">Admin</option>
                <option value="3">Himpunan</option>
                <option value="4">Ukm</option>
                <option value="5">Kedisiplinan</option>
                <option value="6">DapMen</option>
                <option value="7">Staff</option>
                <option value="8">Maba</option>
              </select>
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
    @endsection
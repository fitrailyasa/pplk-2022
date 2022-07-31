@extends('layouts.admin.app')

@section('title', 'Tambah User')

@section('content')

<!--Tambah User-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-user">
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
              <input type="text" class="form-control" name="prodi" id="prodi"  >
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
              <input type="text" class="form-control" placeholder="Golongan Darah" name="golonganDarah" id="golonganDarah" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Foto Profil</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Foto Profil" name="fotoProfil" id="fotoProfil" >
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
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Qr Code</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Qr Code" name="qrCode" id="qrCode" required>
              </div>
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
    <!--./Tambah User-->

@endsection
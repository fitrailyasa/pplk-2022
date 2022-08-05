@extends('layouts.admin.app')

@section('title', 'Edit User')

@section('content')

<!--Edit User-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="edit-user">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Edit Data User</h4>
      </div>
      <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.dapmenUser.update', $user->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.dapmenUser.update', $user->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 6)
        <form method="POST" action="{{ route('dapmen.dapmenUser.update', $user->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $user->id }}" name="id">
          <input type="hidden" value="{{$user->password}}" name="password">
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama User</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" id="nama" value="{{ $user->nama }}" enabled>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="fitra@gabut.com" name="email" id="email" value="{{ $user->email }}" enabled>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" placeholder="fitra@gabut.com" name="password" id="password" enabled>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">NIM</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" name="nim" id="nim" value="{{ $user->nim }}" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Kelompok</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Kelompok" name="kelompok" id="kelompok" value="{{ $user->kelompok }}" >
            </div>
          </div>
          <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Program Studi</label>
            <div class="col-sm-9">
            <select name="prodi">
            <option selected class="selected">{{ $user->prodi }}</option>
           @foreach ($prodis as $prodi )
           <option  value="{{ $prodi->namaLengkap }}">{{ $prodi->namaLengkap }}</option>
           @endforeach
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">No Telepon</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="628...." name="telepon" id="telepon" value="{{ $user->nomorHp }}" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Golongan Darah</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Golongan Darah" name="golongandarah" id="golongandarah" value="{{ $user->golonganDarah}}" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Instagram</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="username tanpa (@)" name="instagram" id="instagram" value="{{ $user->instagram }}" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Riwayat Penyakit</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area penyakit" placeholder="Riwayat Penyakit" name="riwayatPenyakit" id="riwayatPenyakit" value="{{ $user->riwayatPenyakit }}" >{{ $user->riwayatPenyakit }}</textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary ">Simpan</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!--./Edit User-->

@endsection

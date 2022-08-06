@extends('layouts.admin.app')

@section('title', 'Detail User')

@section('content')

<!--Detail User-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-user">
      <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.dapmenUser.show', $user->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.dapmenUser.show', $user->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 6)
        <form method="POST" action="{{ route('dapmen.dapmenUser.show', $user->id) }}" enctype='multipart/form-data'>
    @endif
    @csrf
        @method('PUT')
        <div class="image">
            @if ($user->fotoProfil == Null)
              <img src="{{ asset('assets/profile') }}/default.png" style="width:200px !important; height:200px !important; align-item: center;" class="img-circle elevation-2" alt="User Image">
            @else
              <img src="{{ asset('assets/profile') }}/{{ $user->fotoProfil }}" style="width:200px !important; height:200px !important; align-item: center;" class="img-circle elevation-2" alt="User Image">
            @endif
        </div><br><br>
        <input type="hidden" value="{{ $user->id }}" name="id">
          <input type="hidden" value="{{$user->password}}" name="password">
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama User</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" id="nama" value="{{ $user->nama }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="fitra@gabut.com" name="email" id="email" value="{{ $user->email }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" placeholder="*******" name="password" id="password" value="{{ $user->password }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">NIM</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" name="nim" id="nim" value="{{ $user->nim }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Kelompok</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" placeholder="Kelompok" name="kelompok" id="kelompok" value="{{ $user->kelompok }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Program Studi</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="628...." name="telepon" id="telepon" value="{{ $user->prodi }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">No Telepon</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="628...." name="telepon" id="telepon" value="{{ $user->nomorHp }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Golongan Darah</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Golongan Darah" name="golongandarah" id="golongandarah" value="{{ $user->golonganDarah}}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Instagram</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="username tanpa (@)" name="instagram" id="instagram" value="{{ $user->instagram }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Riwayat Penyakit</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area penyakit" placeholder="Riwayat Penyakit" name="riwayatPenyakit" id="riwayatPenyakit" value="{{ $user->riwayatPenyakit }}" disabled>{{ $user->riwayatPenyakit }}</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-9">
              <a>
                @if(auth()->user()->roles_id == 1)
                    <a class="btn btn-primary" href="{{ route('super.user.index') }}">Kembali</a>
                @elseif(auth()->user()->roles_id == 2)
                    <a class="btn btn-primary" href="{{ route('admin.dapmenUser.index') }}">Kembali</a>
                @elseif(auth()->user()->roles_id == 6)
                    <a class="btn btn-primary" href="{{ route('dapmen.dapmenUser.index') }}">Kembali</a>
                @endif
              </a>
            </div>
        </div><br><br><br>
          </form>
        </div>
    </div>
    <!--./Edit User-->

@endsection

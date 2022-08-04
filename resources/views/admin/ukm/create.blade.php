@extends('layouts.admin.app')

@section('title', 'Tambah UKM')

@section('content')

<!--Tambah UKM/Komunitas-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-ukm">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data UKM/Komunitas</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('adminUkm.store') }}" enctype='multipart/form-data'>

          @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Lengkap" name="namaLengkap" id="namalengkap" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Singkat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Singkat" name="namaSingkat" id="namasingkat" required>
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
              <input type="text" class="form-control" placeholder="Misi" name="misi" id="misi" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Pembina</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Pembina" name="pembina" id="pembina" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Ketua Umum</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Ketua Umum" name="ketuaUmum" id="ketuaUmum" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Dies Natalis</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Dies Natalis" name="tahunBerdiri" id="tahunBerdiri" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Logo</label>
            <div class="col-sm-9">
              <input type="file" accept="image/*" class="form-control" name="logo" id="logo" >
              @error('logo')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
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
            <div class="col-sm-9">
              <input type="file" accept="image/*" class="form-control" name="qrCode" id="qrCode" >
              @error('qrCode')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Deskripsi" name="deskripsi" id="deskripsi" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Dokumentasi 1</label>
            <div class="col-sm-9">
              <input type="file" accept="image/*" class="form-control" name="dokumentasi1" id="dokumentasi1" >
              @error('dokumentasi1')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Dokumentasi 2</label>
            <div class="col-sm-9">

                <input type="file" accept="image/*" class="form-control" name="dokumentasi2" id="dokumentasi2" >
                @error('dokumentasi2')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Dokumentasi 3</label>
            <div class="col-sm-9">
              <input type="file" accept="image/*" class="form-control" name="dokumentasi3" id="dokumentasi3" >
              @error('dokumentasi3')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
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
    <!--./Tambah UKM/Komunitas-->

@endsection

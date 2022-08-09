@extends('layouts.admin.app')

@section('title', 'Edit UKM')

@section('content')

<!--Edit UKM/Komunitas-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="edit-ukm">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Edit Data UKM/Komunitas</h4>
    </div>
    <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.ukm.update',$ukm->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.ukm.update',$ukm->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 4)
        <form method="POST" action="{{ route('ukms.ukm.update',$ukm->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $ukm->id }}" name="id">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama Lengkap</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="namaLengkap" id="namalengkap" value="{{ $ukm->namaLengkap }}" >
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama Singkat</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Singkat" name="namaSingkat" id="namasingkat" value="{{ $ukm->namaSingkat }}">
          </div>
        </div>
        <div class=" mb-3 row" >
          <label class=" col-sm-3 col-form-label" >Visi</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Visi" name="visi" id="visi" value="{{ $ukm->visi }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Misi</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Misi" name="misi" id="misi" value="{{ $ukm->misi }}" required>

          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Pembina</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Pembina" name="pembina" id="namapembina" value="{{ $ukm->pembina }}" >
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Ketua Umum</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Ketua Umum" name="ketuaUmum" id="ketuaumum" value="{{ $ukm->ketuaUmum }}" >
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Dies Natalis</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Dies Natalis" name="tahunBerdiri" id="diesnatalis" value="{{ $ukm->tahunBerdiri }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Logo</label>
          <div class="col-sm-9">
            <input type="file" accept="image/*" class="form-control" name="logo" id="logo" value="{{ $ukm->logo }}">
          </div>
          @error('logo')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Filosofi Logo</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Filosofi Logo" name="filosofiLogo" id="filosofiLogo" value="{{ $ukm->filosofiLogo }}" >{{ $ukm->filosofiLogo }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">QR-Code</label>
          <div class="col-sm-9">
            <input type="file" accept="image/*" class="form-control" name="qrCode" id="qrCode" >
          </div>
          @error('qrCode')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Pembina" name="deskripsi" id="deskripsi" value="{{ $ukm->deskripsi }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Dokumentasi 1</label>
          <div class="col-sm-9">
            <input type="file" accept="image/*" class="form-control" name="dokumentasi1" id="dokumentasi1" >
          </div>
          @error('dokumentasi1')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Dokumentasi 2</label>
          <div class="col-sm-9">
            <input type="file" accept="image/*" class="form-control" name="dokumentasi2" id="dokumentasi2">
          </div>
          @error('dokumentasi2')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Dokumentasi 3</label>
          <div class="col-sm-9">
            <input type="file" accept="image/*" class="form-control" name="dokumentasi3" id="dokumentasi3">
          </div>
          @error('dokumentasi3')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
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
  <!--./Edit UKM/Komunitas-->

  @endsection

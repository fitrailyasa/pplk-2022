@extends('layouts.admin.modal')
@extends('layouts.admin.app')

@section('title', 'editupt')

@section('content')

<div class="col-lg-12 col-lg-12 form-wrapper"  id="edithimpunan">
  <div class="card">
  <div class="card-header">
  <h4 class="card-title">Input Data Himpunan</h4>
  </div>
  <div class="card-body">
    <form method="POST" action="{{ route('editHimpunan') }}" enctype='multipart/form-data'>
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $himpunan->id }}">
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Nama Lengkap" name="namaLengkap" id="namaLengkap" value="{{ $himpunan->namaLengkap }}" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Nama Singkat</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Nama Singkat" name="namaSingkat" id="namaSingkat" value="{{ $himpunan->namaSingkat }}" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Pembina</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Pembina" name="pembina" id="pembina" value="{{ $himpunan->pembina }}">
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Ketua Himpunan</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Ketua Himpunan" name="ketuaHimpunan" id="ketuaHimpunan" value="{{ $himpunan->ketuaHimpunan }}" >
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Tahun Berdiri</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" name="tahunBerdiri" id="tahunBerdiri" value="{{ $himpunan->tahunBerdiri }}" >
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Kode Warna</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Kode Warna" name="kodeWarna" id="kodeWarna" value="{{ $himpunan->kodeWarna }}" >
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Visi</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Visi" name="visi" id="visi" value="{{ $himpunan->visi }}" >
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Misi</label>
        <div class="col-sm-9">
          <textarea class="form-control custom-txt-area misi" placeholder="Misi" name="misi" id="misi" value="{{ $himpunan->misi }}"  >{{ $himpunan->misi }}</textarea>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Logo</label>
        <div class="col-sm-9">
          <input type="file" accept="image/*" class="form-control" name="logo" id="logo" value="{{ $himpunan->logo }}" >
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Filosofi Logo</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Filosofi Logo" name="filosofiLogo" id="filosofiLogo" value="{{ $himpunan->filosofiLogo}}">
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Deskripsi</label>
        <div class="col-sm-9 ">
          <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="deskripsi" id="deskripsi" value="{{ $himpunan->deskripsi }}" >{{ $himpunan->deskripsi }}</textarea>
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

@endsection
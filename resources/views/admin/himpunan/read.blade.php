@extends('layouts.admin.app')

@section('title', 'Detail Himpunan')

@section('content')

  <!--Detail Himpunan-->
  <div class="col-lg-12 col-lg-12 form-wrapper" id="detail-himpunan">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Detail Data Himpunan</h4>
    </div>
    <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.himpunan.show') }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.himpunan.show') }}" enctype='multipart/form-data'>
    @endif
    @method('PUT')
      @csrf
      <input type="hidden" name="id" value="{{ $himpunan->id }}">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama Lengkap</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="namaLengkap" id="namaLengkap" value="{{ $himpunan->namaLengkap }}" disabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama Singkat</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Singkat" name="namaSingkat" id="namaSingkat" value="{{ $himpunan->namaSingkat }}" disabled>
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
            <input type="file" accept="image/*" class="form-control" name="logo" id="logo"  >
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
        </form>
      </div>
    </div>
  </div>
  <!--./Edit Himpunan-->

@endsection

@extends('layouts.admin.modal')
@extends('layouts.admin.app')

@section('title', 'editupt')

@section('content')

<div class="col-lg-12 col-lg-12 form-wrapper "  id="editprodi">
  <div class="card">
  <div class="card-header">
  <h4 class="card-title">Input Data Prodi</h4>
  </div>
  <div class="card-body">
    <form method="POST" action="{{ route('editProdi') }}" enctype='multipart/form-data'>
    @csrf
    @method('PUT')
    <input type="hidden" value="{{ $prodi->id }}" name="id">
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Nama Prodi</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Nama Prodi" name="namaLengkap" id="namaprodi" value="{{ $prodi->namaLengkap }}" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Nama Singkat</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Nama Prodi" name="namaSingkat" id="namaprodi" value="{{ $prodi->namaSingkat }}" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Kepala Prodi</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Nama Kepala Prodi" name="kepalaProdi" id="namakaprodi" value="{{ $prodi->kepalaProdi }}" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Akreditasi</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Akreditasi" name="akreditasi" id="akreditasi" value="{{ $prodi->akreditsi }}" >
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Ruang Prodi</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Ruang Prodi" name="ruangProdi" id="ruangprodi" value="{{ $prodi->ruangProdi }}"  >
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Tahun Berdiri</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" name="tahunBerdiri" id="tahunBerdiri" value="{{ $prodi->tahunBerdiri }}"  >
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Jumlah Mahasiswa</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Jumlah Mahasiswa" name="jumlahMahasiswa" id="kodeWarna" value="{{ $prodi->jumlahMahasiswa }}"  >
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Visi</label>
        <div class="col-sm-9">
          <textarea class="form-control custom-txt-area visi" placeholder="Visi" name="visi" id="visi" value="{{ $prodi->visi }}" >{{ $prodi->visi }}</textarea>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Misi</label>
        <div class="col-sm-9">
          <textarea class="form-control custom-txt-area misi" placeholder="Misi" name="misi" id="misi" value="{{ $prodi->misi }}"  >{{ $prodi->misi }}</textarea>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Logo</label>
        <div class="col-sm-9">
          <input type="file" accept="image/*" class="form-control" name="logo" id="logo" value="{{ $prodi->logo }}" >
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Tentang Kami</label>
        <div class="col-sm-9 ">
          <textarea class="form-control custom-txt-area" placeholder="Tentang Kami" name="deskripsi" id="tentangkami" value="{{ $prodi->deskripsi }}" >{{ $prodi->deskripsi }}</textarea>
        </div>
      </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Prestasi</label>
          <div class="col-sm-9 mb-3">
            <textarea class="form-control custom-txt-area misi" placeholder="Tahun 2020" name="prestasi" id="prestasi" value="{{ $prodi->prestasi }}" >{{ $prodi->prestasi }}</textarea>
            <textarea class="form-control custom-txt-area misi" placeholder="Tahun 2021" name="prestasi" id="prestasi" value="{{ $prodi->prestasi }}"  >{{ $prodi->prestasi }}</textarea>
            <textarea class="form-control custom-txt-area misi" placeholder="Tahun 2022" name="prestasi" id="prestasi" value="{{ $prodi->prestasi }}"  >{{ $prodi->prestasi }}</textarea>
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
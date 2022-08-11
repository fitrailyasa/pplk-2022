@extends('layouts.admin.app')

@section('title', 'Edit Prodi')

@section('content')

  <!--Edit Prodi-->
  <div class="col-lg-12 col-lg-12 form-wrapper" id="edit-prodi">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Edit Data Prodi</h4>
    </div>
    <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.prodi.update',$prodi->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.prodi.update',$prodi->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 3)
        <form method="POST" action="{{ route('himpunans.prodi.update',$prodi->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
      @method('PUT')
      <input type="hidden" value="{{ $prodi->id }}" name="id">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama Prodi</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Prodi" name="namaLengkap" id="namaprodi" value="{{ $prodi->namaLengkap }}" >
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama Singkat</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Prodi" name="namaSingkat" id="namaprodi" value="{{ $prodi->namaSingkat }}" >
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Kepala Prodi</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Kepala Prodi" name="kepalaProdi" id="namakaprodi" value="{{ $prodi->kepalaProdi }}" >
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Akreditasi</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Akreditasi" name="akreditasi" id="akreditasi" value="{{ $prodi->akreditasi }}" >
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
            <input type="file" class="form-control" name="logo" id="logo">
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
              <textarea class="form-control custom-txt-area misi" placeholder="Tahun 2020" name="prestasi1" id="prestasi1" value="{{ $prodi->prestasi1 }}" >{{ $prodi->prestasi1 }}</textarea>
              <textarea class="form-control custom-txt-area misi" placeholder="Tahun 2021" name="prestasi2" id="prestasi2" value="{{ $prodi->prestasi2 }}"  >{{ $prodi->prestasi2 }}</textarea>
              <textarea class="form-control custom-txt-area misi" placeholder="Tahun 2022" name="prestasi3" id="prestasi3" value="{{ $prodi->prestasi3}}"  >{{ $prodi->prestasi3 }}</textarea>
            </div>
          </div>
          <div class="mb-3 row">

            <label class="col-sm-3 col-form-label">Jurusan</label>
              <div class="col-sm-9">
              <select style="width:100px;" selected class="selected" name="jurusan_id" value="{{ $prodi->jurusan_id }}">
                <option value="1" >JTIK</option>
                <option value="2">JTPI</option>
                <option value="3">JS</option>
              </select>
            </div>

          </div>
        <div class="mb-3 row">
          <div class="col-sm-9">
            <a>
            <button type="submit" class="btn btn-primary ">Simpan</button>
            </a>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--Edit Prodi-->

@endsection

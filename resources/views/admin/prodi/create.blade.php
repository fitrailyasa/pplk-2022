@extends('layouts.admin.app')

@section('title', 'Tambah Prodi')

@section('content')

  <!--Tambah Prodi-->
  <div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-prodi">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data Prodi</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('adminProdi.store') }}" enctype='multipart/form-data'>
        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Prodi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Prodi" name="namaLengkap" id="namaLengkap" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Singkat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Singkat" name="namaSingkat" id="namaSingkat" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Kepala Prodi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Kepala Prodi" name="kepalaProdi" id="namakaprodi" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Akreditasi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Akreditasi" name="akreditasi" id="akreditasi" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Ruang Prodi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Ruang Prodi" name="ruangProdi" id="ruangprodi"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Tahun Berdiri</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" placeholder="Tahun Berdiri" name="tahunBerdiri" id="tahunBerdiri"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Jumlah Mahasiswa</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Kode Warna" name="jumlahMahasiswa" id="kodeWarna"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Visi</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area visi" placeholder="Visi" name="visi" id="visi"  ></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Misi</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area misi" placeholder="Misi" name="misi" id="misi"  ></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Logo</label>
            <div class="col-sm-9">
              <input type="file" accept="image/*" class="form-control" name="logo" id="logo" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Tentang Kami</label>
            <div class="col-sm-9 ">
              <textarea class="form-control custom-txt-area" placeholder="Tentang Kami" name="deskripsi" id="tentangkami"  ></textarea>
            </div>
          </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Prestasi</label>
              <div class="col-sm-9 mb-3">
                <textarea class="form-control custom-txt-area misi" placeholder="Tahun 2020" name="prestasi1" id="prestasi1"  ></textarea>
                <textarea class="form-control custom-txt-area misi" placeholder="Tahun 2021" name="prestasi2" id="prestasi2"  ></textarea>
                <textarea class="form-control custom-txt-area misi" placeholder="Tahun 2022" name="prestasi3" id="prestasi3"  ></textarea>
              </div>
            </div>

            <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Jurusan</label>
          <div class="col-sm-9">
          <select style="width:70px;" selected class="selected"  name="jurusan_id">
            <option value="1">JTIK</option>
            <option value="2" >JTPI</option>
            <option value="3" >JS</option>
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
    <!--./Tambah Prodi-->

@endsection
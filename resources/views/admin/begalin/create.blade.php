@extends('layouts.admin.modal')
@extends('layouts.admin.app')

@section('title', 'Tambah Begalin')

@section('content')

<!--Begalin-->
<div class="col-lg-12 col-lg-12 form-wrapper tabcontents" style="display: none"  id="tambah-begalin">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data Begalin</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('createBegalin') }}" enctype='multipart/form-data'>
        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Artikel Singkat</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Artikel Singkat..." name="judul" id="singkat" required></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Artikel Lengkap</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Artikel Lengkap" name="isi" id="lengkap" required></textarea>
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
    <!--./Begalin-->
@endsection
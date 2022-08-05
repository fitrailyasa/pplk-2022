@extends('layouts.admin.app')

@section('title', 'Tambah Begalin')

@section('content')


  <!--Tambah Begalin-->
  <div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-begalin">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data Begalin</h4>
      </div>
      <div class="card-body">
        @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.begalin.store',$begalin->id) }}" enctype='multipart/form-data'>
        @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.begalin.store',$begalin->id) }}" enctype='multipart/form-data'>
        @endif
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
    <!--./Tambah Begalin-->
@endsection

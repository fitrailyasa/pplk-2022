@extends('layouts.admin.app')

@section('title', 'Tambah Kamus Gaul')

@section('content')

<!--Tambah Kamus Gaul-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-kamus">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data Kamus Gaul</h4>
      </div>
      <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.kamusgaul.store') }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.kamusgaul.store') }}" enctype='multipart/form-data'>
    @endif
        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Kamus Gaul</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Kamus Gaul" name="gaul" id="kamus" required></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Arti Kamus</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Arti Kamus" name="asli" id="arti-kamus" required></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Contoh Penggunaan</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Contoh Pemakaian Kata" name="contohPenggunaan" id="arti-kamus" required></textarea>
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
    <!--./Tambah Kamus Gaul-->

@endsection

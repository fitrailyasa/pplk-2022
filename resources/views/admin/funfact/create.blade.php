@extends('layouts.admin.app')

@section('title', 'Tambah Funfact')

@section('content')

  <!--Tambah Funfact-->
  <div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-funfact">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data Funfact</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('adminFunfact.store') }}" enctype='multipart/form-data'>

        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="isi" id="isi" ></textarea>
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
    <!--./Tambah Funfact-->

@endsection
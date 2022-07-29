@extends('layouts.admin.app')

@section('title', 'Edit UPT')

@section('content')

<!--Edit UPT ITERA-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="edit-upt">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Edit Data UPT ITERA</h4>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('editUpt') }}" enctype='multipart/form-data'>
      @csrf
      @method('PUT')
      <input type="hidden" value="{{ $upt->id }}" name="id">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama UPT</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama UPT ITERA" name="nama" id="nama" value="{{ $upt->nama }}" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area deskripsi" placeholder="Deskripsi UPT" name="deskripsi" id="deskripsi" value="{{ $upt->deskripsi }}" >{{ $upt->deskripsi }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-sm-9">
            <button type="submit" class="btn btn-primary ">Ubah</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--./Edit UPT ITERA-->

@endsection
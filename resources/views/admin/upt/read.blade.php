@extends('layouts.admin.app')

@section('title', 'Detail UPT')

@section('content')

<!--Detail UPT ITERA-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-upt">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Detail UPT ITERA</h4>
    </div>
    <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.upt.show',$upt->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.upt.show',$upt->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
      @method('PUT')
      <input type="hidden" value="{{ $upt->id }}" name="id">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama UPT</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama UPT ITERA" name="nama" id="nama" value="{{ $upt->nama }}" disabled>
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
              <a>
                @if(auth()->user()->roles_id == 1)
                    <a class="btn btn-primary" href="{{ route('super.upt.index') }}">Kembali</a>
                @elseif(auth()->user()->roles_id == 2)
                    <a class="btn btn-primary" href="{{ route('admin.upt.index') }}">Kembali</a>
                @endif
              </a>
            </div>
        </div><br><br><br>
        </form>
      </div>
    </div>
  </div>
  <!--./Detail UPT ITERA-->

@endsection

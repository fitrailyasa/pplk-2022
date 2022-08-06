@extends('layouts.admin.app')

@section('title', 'Detail Begalin')

@section('content')


<!--Detail Begalin-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-begalin">

    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Detail Data Begalin</h4>
    </div>
    <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.begalin.show',$begalin->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.begalin.show',$begalin->id) }}" enctype='multipart/form-data'>
    @endif
      @method('PUT')
      @csrf
      <input type="hidden" value="$begalin->id" name="id">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Artikel Singkat</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Artikel Singkat..." name="judul" id="singkat" value="{{  $begalin->judul  }}" disabled>{{ $begalin->judul }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Artikel Lengkap</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Artikel Lengkap" name="isi" id="lengkap" value="{{  $begalin->isi  }}" disabled>{{ $begalin->isi }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-9">
              <a>
                @if(auth()->user()->roles_id == 1)
                    <a class="btn btn-primary" href="{{ route('super.begalin.index') }}">Kembali</a>
                @elseif(auth()->user()->roles_id == 2)
                    <a class="btn btn-primary" href="{{ route('admin.begalin.index') }}">Kembali</a>
                @endif
              </a>
            </div>
        </div><br><br><br>
        </form>
      </div>
    </div>
  </div>
  <!--./Detail Begalin-->

@endsection



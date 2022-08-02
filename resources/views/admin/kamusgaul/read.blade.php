@extends('layouts.admin.app')

@section('title', 'Detail Kamus Gaul')

@section('content')

<!--Detail Kamus Gaul-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-kamusgaul">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Detail Kamus Gaul</h4>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('adminKamusgaul.show',$kamusgaul->id) }}" enctype='multipart/form-data'>
      @csrf
      @method('PUT')
      <input type="hidden" name="id" value="$kamusgaul->id">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Kamus Gaul</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Kamus Gaul" name="gaul" id="gaul" value="{{ $kamusgaul->gaul }}" disabled>{{ $kamusgaul->gaul }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Arti Kamus</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Arti Kamus" name="asli" id="asli" value="{{ $kamusgaul->asli }}">{{ $kamusgaul->asli }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Contoh Penggunaan</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Contoh Penggunaan" name="contohPenggunaan" id="contohPenggunaan" value="{{ $kamusgaul->contohPenggunaan }}">{{ $kamusgaul->contohPenggunaan }}</textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--./Detail Kamus Gaul-->

@endsection
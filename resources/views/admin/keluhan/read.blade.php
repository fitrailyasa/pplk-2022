@extends('layouts.admin.app')

@section('title', 'Detail Keluhan')

@section('content')


<!--Detail Keluhan-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-keluhan">

    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Detail Keluhan</h4>
    </div>
    <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.keluhan.show',$keluhan->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 5)
        <form method="POST" action="{{ route('kedis.keluhan.show',$keluhan->id) }}" enctype='multipart/form-data'>
    @endif
      @method('PUT')
      @csrf
      <input type="hidden" value="$keluhan->id" name="id">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">NIM</label>
          <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="NIM..." name="nim" id="nim" value="{{  $keluhan->nim  }}" disabled>
          </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Kelompok</label>
            <div class="col-sm-9">
                <input type="text"class="form-control" placeholder="Kelompok..." name="kelompok" id="kelompok" value="{{  $keluhan->kelompok  }}" disabled>
            </div>
          </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Keluhan</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Keluhan" name="keluhan" id="lengkap" value="{{  $keluhan->keluhan  }}" disabled>{{ $keluhan->keluhan }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Gambar</label>
            <div class="col-sm-9">
            <img class="img-thumbnail ratio ratio-1x1" src="{{ asset('assets/buktiKeluhan') }}/{{ $keluhan->bukti }}" alt="" height="300" width="300" style="object-fit: none;">
            <a class="btn" href="{{URL::to('/assets/buktiKeluhan')}}/{{ $keluhan->bukti }}" download="Gambar Keluhan"><i class="fa fa-download"></i>Download</a>
          </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-9">
              <a>
                @if(auth()->user()->roles_id == 1)
                    <a class="btn btn-primary" href="{{ route('super.keluhan.index') }}">Kembali</a>
                @elseif(auth()->user()->roles_id == 5)
                    <a class="btn btn-primary" href="{{ route('kedis.keluhan.index') }}">Kembali</a>
                @endif
              </a>
            </div>
        </div><br><br><br>
        </form>
      </div>
    </div>
  </div>
  <!--./Detail Keluhan-->

@endsection



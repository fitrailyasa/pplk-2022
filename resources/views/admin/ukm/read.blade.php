@extends('layouts.admin.app')

@section('title', 'Detail UKM')

@section('content')

<!--Detail UKM/Komunitas-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-ukm">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Detail UKM/Komunitas</h4>
    </div>
    <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.ukm.show',$ukm->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.ukm.show',$ukm->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 4)
        <form method="POST" action="{{ route('ukms.ukm.show',$ukm->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $ukm->id }}" name="id">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama Lengkap</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="{{ $ukm->namaLengkap }}" name="namaLengkap" id="namalengkap" disabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama Singkat</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="{{ $ukm->namaSingkat }}" name="namaSingkat" id="namasingkat" disabled>
          </div>
        </div>
        <div class=" mb-3 row" >
          <label class=" col-sm-3 col-form-label" >Visi</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="{{ $ukm->visi }}" name="visi" id="visi" disabled value="{{ $ukm->visi }}" >{{ $ukm->visi }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Misi</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="{{ $ukm->misi }}" name="misi" id="misi" disabled value="{{ $ukm->misi }}" >{{ $ukm->misi }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Pembina</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="{{ $ukm->pembina }}" name="pembina" id="namapembina"  disabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Ketua Umum</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="{{ $ukm->ketuaUmum }}" name="ketuaUmum" id="ketuaumum" disabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Dies Natalis</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="{{ $ukm->tahunBerdiri }}" name="tahunBerdiri" id="diesnatalis" disabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Logo</label>
          <div class="col-sm-9">
            <img src="{{ asset('assets/ukm/logo') }}/{{ $ukm->logo }}" alt="logo ukm" width="75px">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Filosofi Logo</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="{{ $ukm->filosofiLogo }}" name="filosofiLogo" id="filosofiLogo" disabled value="{{ $ukm->filosofiLogo }}" >{{ $ukm->filosofiLogo }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">QR-Code</label>
          <div class="col-sm-9 ">
            <img src="{{ asset('assets/qrCodeUkm') }}/{{ $ukm->qrCode }}" alt="logo ukm" width="75px">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="{{ $ukm->deskripsi }}" name="deskripsi" id="deskripsi" disabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Dokumentasi 1</label>
          <div class="col-sm-9">
            <img src="{{ asset('assets/ukm/dokumentasi1') }}/{{ $ukm->dokumentasi1 }}" alt="dokumentasi1 ukm" width="75px">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Dokumentasi 2</label>
          <div class="col-sm-9">
            <img src="{{ asset('assets/ukm/dokumentasi2') }}/{{ $ukm->dokumentasi2 }}" alt="dokumentasi2 ukm" width="75px">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Dokumentasi 3</label>
          <div class="col-sm-9">
            <img src="{{ asset('assets/ukm/dokumentasi3') }}/{{ $ukm->dokumentasi13 }}" alt="dokumentasi13 ukm" width="75px">
          </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-9">
              <a>
                @if(auth()->user()->roles_id == 1)
                    <a class="btn btn-primary" href="{{ route('super.ukm.index') }}">Kembali</a>
                @elseif(auth()->user()->roles_id == 2)
                    <a class="btn btn-primary" href="{{ route('admin.ukm.index') }}">Kembali</a>
                @elseif(auth()->user()->roles_id == 4)
                    <a class="btn btn-primary" href="{{ route('ukms.ukm.index') }}">Kembali</a>
                @endif
              </a>
            </div>
        </div><br><br><br>
        </form>
      </div>
    </div>
  </div>
  <!--./Detail UKM/Komunitas-->

  @endsection

@extends('layouts.admin.app')

@section('title', 'Detail Funfact')

@section('content')

<!--Detail Funfact-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-funfact">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Detail Data Funfact</h4>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('adminFunfact.show',$funfact->id) }}" enctype='multipart/form-data'>
      @method('PUT')
      @csrf
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
      </div>
      @endif
      <input type="hidden" name="id" value="{{ $funfact->id }}">
        
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="isi" id="" value="{{ $funfact->isi }}" disabled>{{ $funfact->isi }}</textarea>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--./Detail Funfact-->

@endsection



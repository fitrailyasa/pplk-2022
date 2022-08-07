@extends('layouts.admin.app')

@section('title', 'Edit Funfact')

@section('content')

<!--Edit Funfact-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="edit-funfact">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Edit Data Booklet</h4>
    </div>
    <div class="card-body">
        @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.booklet.update',$booklet->id) }}" enctype='multipart/form-data'>
        @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.booklet.update',$booklet->id) }}" enctype='multipart/form-data'>
        @endif
        @method('PUT')
      @csrf
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
      </div>
      @endif
      <input type="hidden" name="id" value="{{ $booklet->id }}">

        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="booklet" id="booklet" value="{{ $booklet->booklet }}" required>{{$booklet->booklet }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-sm-9">
            <button type="submit" class="btn btn-primary ">Simpan</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--./Edit Funfact-->

@endsection



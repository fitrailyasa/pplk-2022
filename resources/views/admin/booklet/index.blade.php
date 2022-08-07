@extends('layouts.admin.app')

@section('title', 'Kelola Funfact')

@section('content')

<!--Tabel Funfact-->
<div class="col-lg-12col-lg-12 form-wrapper" id="kelola-funfact">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Tabel Booklet</h4>
        </div>
        <div class="card-body">
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="container">
            <div class="panel">
            <div class="panel-heading border">
            </div>
          <div class="panel-body">
                <table class=" table-responsive table table-bordered bordered table-striped table-condensed datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Deskripsi</th>
                    <th>More</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>{{ $booklet->booklet }}</td>
                    <td class="manage-row">
                    @if(auth()->user()->roles_id == 1)
                        <a href="{{ route('super.booklet.show',$booklet->id) }}" class="edit-button">
                          <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('super.booklet.edit',$booklet->id) }}" class="edit-button">
                          <i class="fa-solid fa-marker"></i>
                        </a>
                    @elseif(auth()->user()->roles_id == 2)
                        <a href="{{ route('admin.booklet.show',$booklet->id) }}" class="edit-button">
                          <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.booklet.edit',$booklet->id) }}" class="edit-button">
                          <i class="fa-solid fa-marker"></i>
                        </a>
                    @endif




                    </td>
                  </tr>
                </tbody>
                {{-- link paginate --}}
            </table>
          </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!--./Tabel Funfact-->

@endsection

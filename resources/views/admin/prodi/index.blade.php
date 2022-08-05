@extends('layouts.admin.app')

@section('title', 'Kelola Prodi')

@section('content')

  <!--Tabel Prodi-->
  <div class="col-lg-12col-lg-12 form-wrapper" id="kelola-prodi">
       <div class="card">
      <div class="card-header">
        <h4 class="card-title">Kelola Tabel Prodi</h4>
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
          <div class="container" ng-app="formvalid">
            <div class="panel" data-ng-controller="validationCtrl">
          </div>
        <div class="panel-body">
              <table class=" table-responsive table table-bordered bordered table-striped table-condensed datatable" ui-jq="dataTable" ui-options="dataTableOpt">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Singkat</th>
                    <th>More</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($prodis as $prodi)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $prodi->namaLengkap }}</td>
                    <td>{{ $prodi->namaSingkat }}</td>
                    <td class="manage-row">
                    @if(auth()->user()->roles_id == 1)
                        <a href="{{ route('super.prodi.show',$prodi->id) }}" class="edit-button">
                          <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('super.prodi.edit',$prodi->id) }}" class="edit-button">
                          <i class="fa-solid fa-marker"></i>
                        </a>
                    @elseif(auth()->user()->roles_id == 2)
                        <a href="{{ route('admin.prodi.show',$prodi->id) }}" class="edit-button">
                          <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.prodi.edit',$prodi->id) }}" class="edit-button">
                          <i class="fa-solid fa-marker"></i>
                        </a>
                    @elseif(auth()->user()->roles_id == 3)
                        <a href="{{ route('himpunans.prodi.show',$prodi->id) }}" class="edit-button">
                          <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('himpunans.prodi.edit',$prodi->id) }}" class="edit-button">
                          <i class="fa-solid fa-marker"></i>
                        </a>
                    @endif
                    <!-- Button trigger modal -->
                    <a role="button"  class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$prodi->id}}">
                        <i class="fa-solid fa-trash-can"></i>
                      </a>
                      <!-- Modal -->

                      <div class="modal fade bd-example-modal-sm{{$prodi->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    </button>
                                </div>
                                <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                                <div class="modal-footer">
                                @if(auth()->user()->roles_id == 1)
                                    <form action="{{route('super.prodi.destroy', $prodi->id)}}" method="POST">
                                @elseif(auth()->user()->roles_id == 2)
                                    <form action="{{route('admin.prodi.destroy', $prodi->id)}}" method="POST">
                                @elseif(auth()->user()->roles_id == 3)
                                    <form action="{{route('himpunans.prodi.destroy', $prodi->id)}}" method="POST">
                                @endif
                                @method('DELETE')
                                    @csrf
                                    <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
              {{-- link paginate --}}
          </table>
        </div>
        </div>
      </div>
      </div>
     </div>
    </div>
    <!--./Tabel Prodi-->

@endsection

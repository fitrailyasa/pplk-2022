@extends('layouts.admin.modal')
@extends('layouts.admin.app')

@section('title', 'Kelola Begalin')

@section('content')

<!--Tabel Begalin-->
<div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="overflow-x:hidden; display: none;" id="kelola-begalin">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Tabel Begalin</h4>
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
          <div class="container" ng-app="formvalid">
            <div class="panel" data-ng-controller="validationCtrl">
            <div class="panel-heading border">    
            </div>
          <div class="panel-body">
                <table class=" table-responsive table table-bordered bordered table-striped table-condensed datatable" ui-jq="dataTable" ui-options="dataTableOpt">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>judul</th>
                    <th>isi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($begalins as $begalin)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $begalin->judul }}</td>
                    <td>{{ $begalin->isi }}</td>
                    <td class="manage-row">
                      <a href="{{ route('viewEditBegalin', ['id'=>$begalin->id]) }}" class="edit-button">
                        <i class="fa-solid fa-marker"></i>
                      </a>
                      <!-- Button trigger modal -->
                      <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="fa-solid fa-trash-can"></i>
                      </a>
                      <!-- Modal -->
                      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel"><strong>Hapus Data</strong></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Anda yakin menghapus data?
                            </div>
                            <div class="modal-footer">
                              <form action="" method="POST">
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
    <!--./Tabel Begalin-->
@endsection
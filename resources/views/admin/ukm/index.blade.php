@extends('layouts.admin.app')

@section('title', 'Kelola Ukm')

@section('content')
<!--Tabel UKM/Komunitas-->
<div class="col-lg-12col-lg-12 form-wrapper" id="kelola-ukm">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Tabel Komunitas</h4>
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
                  @foreach ($ukms as $ukm)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $ukm->namaLengkap}}</td>
                    <td>{{ $ukm->namaSingkat}}</td>
                    <td class="manage-row">
                    @if(auth()->user()->roles_id == 1)
                        <a href="{{ route('super.ukm.show',$ukm->id) }}" class="edit-button">
                          <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('super.ukm.edit',$ukm->id) }}" class="edit-button">
                          <i class="fa-solid fa-marker"></i>
                        </a>
                    @elseif(auth()->user()->roles_id == 2)
                        <a href="{{ route('admin.ukm.show',$ukm->id) }}" class="edit-button">
                          <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.ukm.edit',$ukm->id) }}" class="edit-button">
                          <i class="fa-solid fa-marker"></i>
                        </a>
                        @elseif(auth()->user()->roles_id == 4)
                        <a href="{{ route('ukms.ukm.show',$ukm->id) }}" class="edit-button">
                          <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('ukms.ukm.edit',$ukm->id) }}" class="edit-button">
                          <i class="fa-solid fa-marker"></i>
                        </a>
                    @endif
                    @if(auth()->user()->roles_id == 1)
                      <!-- Modal -->
                      <div class="modal fade bd-example-modal-sm{{$ukm->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    </button>
                                </div>
                                <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                                <div class="modal-footer">
                                <form action="{{route('super.ukm.destroy', $ukm->id)}}" method="POST">
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
                    @endif
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
    <!--./Tabel UKM/Komunitas-->

    @endsection

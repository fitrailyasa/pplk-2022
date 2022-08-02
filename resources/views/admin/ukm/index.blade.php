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
          <div class="container" ng-app="formvalid">
            <div class="panel" data-ng-controller="validationCtrl">
            <div class="panel-heading border">    
            </div>
          <div class="panel-body">
                <table class=" table-responsive table table-bordered bordered table-striped table-condensed datatable" ui-jq="dataTable" ui-options="dataTableOpt">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Singkat</th>
                    <th>visi </th>
                    <th>misi</th>
                    <th>pembina</th>
                    <th>Ketua Umum</th>
                    <th>Dies Natalis</th>
                    <th>Logo</th>
                    <th>Filosofi Logo</th>
                    <th>Dokumentasi1</th>
                    <th>Dokumentasi2</th>
                    <th>Dokumentasi3</th>
                    <th>More</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($ukms as $ukm)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $ukm->namaLengkap}}</td>
                    <td>{{ $ukm->namaSingkat}}</td>
                    <td>{{ $ukm->visi}}</td>
                    <td>{{ $ukm->misi}}</td>
                    <td>{{ $ukm->pembina}}</td>
                    <td>{{ $ukm->ketuaUmum}}</td>
                    <td>{{ $ukm->tahunBerdiri}}</td>
                    <td>{{ $ukm->logo }}</td>
                    <td>{{ $ukm->filosofiLogo}}</td>
                    <td>{{ $ukm->dokumentasi1 }}</td>
                    <td>{{ $ukm->dokumentasi2 }}</td>
                    <td>{{ $ukm->dokumentasi3 }}</td>
                 
                    <td class="manage-row">
                      <a href="{{ route('adminUkm.edit',$ukm->id) }}" class="edit-button">
                        <i class="fa-solid fa-marker"></i>
                      </a>
                      <!-- Button trigger modal -->
                      <a role="button"  class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$ukm->id}}">
                        <i class="fa-solid fa-trash-can"></i>
                      </a>
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
                                  <form action="{{route('adminUkm.destroy', $ukm->id)}}" method="POST">
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
    <!--./Tabel UKM/Komunitas-->

    @endsection
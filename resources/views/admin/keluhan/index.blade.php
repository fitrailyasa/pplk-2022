@extends('layouts.admin.app')

@section('title', 'Kelola Keluhan')

@section('content')

<!--Tabel Keluhan-->

<div class="col-lg-12col-lg-12 form-wrapper" id="kelola-keluhan">

      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Tabel Keluhan</h4>
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
                <table class=" table-responsive table table-bordered bordered table-striped table-condensed datatable" ui-jq="dataTable" ui-options="dataTableOpt">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Kelompok</th>
                        <th>Keluhan</th>
                        <th>Gambar</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($keluhans as $keluhan)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $keluhan->nim }}</td>
                    <td>{{ $keluhan->kelompok }}</td>
                    <td>{{ $keluhan->keluhan }}</td>
                    <td><img src="{{ asset('assets/buktiKeluhan') }}/{{ $keluhan->bukti }}" width="100" height="100"/></td>
                    <td class="manage-row">
                    @if(auth()->user()->roles_id == 1)
                      <a href="{{ route('super.keluhan.show',$keluhan->id) }}" class="edit-button">
                        <i class="fa-solid fa-eye"></i>
                      </a>
                    @elseif(auth()->user()->roles_id == 5)
                      <a href="{{ route('kedis.keluhan.show',$keluhan->id) }}" class="edit-button">
                        <i class="fa-solid fa-eye"></i>
                      </a>
                    @endif
                      <!-- Button trigger modal -->
                      <a role="button"  class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$keluhan->id}}">
                        <i class="fa-solid fa-trash-can"></i>
                      </a>
                      <!-- Modal -->

                      <div class="modal fade bd-example-modal-sm{{$keluhan->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                    <form action="{{route('super.keluhan.destroy', $keluhan->id)}}" method="POST">
                                @elseif(auth()->user()->roles_id == 2)
                                    <form action="{{route('admin.keluhan.destroy', $keluhan->id)}}" method="POST">
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
    <!--./Tabel Keluhan-->
@endsection

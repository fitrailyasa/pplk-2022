@extends('layouts.admin.app')

@section('title', 'Kelola Himpunan')

@section('content')

<!--Tabel Himpunan-->
<div class="col-lg-12col-lg-12 form-wrapper" id="kelola-himpunan">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Tabel Himpunan</h4>
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
                    <th>Nama Singkat</th>
                    <th>Nama Lengkap</th>
                    <th>More</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($himpunans as $himpunan)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $himpunan->namaSingkat }}</td>
                    <td>{{ $himpunan->namaLengkap }}</td>
                    <td class="manage-row">
                      <a href="{{ route('adminHimpunan.show', $himpunan->id)}}" class="edit-button">
                        <i class="fa-solid fa-eye"></i>
                      </a>
                      <a href="{{ route('adminHimpunan.edit', $himpunan->id)}}" class="edit-button">
                        <i class="fa-solid fa-marker"></i>
                      </a>
                      <!-- Button trigger modal -->
                      <a role="button"  class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$himpunan->id}}">
                        <i class="fa-solid fa-trash-can"></i>
                      </a>
                      <!-- Modal -->
                      <div class="modal fade bd-example-modal-sm{{$himpunan->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                              <form action="{{route('adminHimpunan.destroy', $himpunan->id)}}" method="POST">
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
    <!--./Tabel Himpunan-->

@endsection
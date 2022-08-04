@extends('layouts.admin.app')

@section('title', 'Kelola Funfact')

@section('content')

<!--Tabel Funfact-->
<div class="col-lg-12col-lg-12 form-wrapper" id="kelola-funfact">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kelola Tabel Funfact</h4>
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
                  @foreach ($funfacts as $funfact)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $funfact->isi }}</td>
                    <td class="manage-row">
                    @if(auth()->user()->roles_id == 1)
                        <a href="{{ route('super.funfact.show',$funfact->id) }}" class="edit-button">
                          <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('super.funfact.edit',$funfact->id) }}" class="edit-button">
                          <i class="fa-solid fa-marker"></i>
                        </a>
                    @elseif(auth()->user()->roles_id == 2)
                        <a href="{{ route('admin.funfact.show',$funfact->id) }}" class="edit-button">
                          <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.funfact.edit',$funfact->id) }}" class="edit-button">
                          <i class="fa-solid fa-marker"></i>
                        </a>
                    @endif
                      <!-- Button trigger modal -->
                      <a role="button"  class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$funfact->id}}">
                        <i class="fa-solid fa-trash-can"></i>
                      </a>
                      <!-- Modal -->

                      <div class="modal fade bd-example-modal-sm{{$funfact->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                    <form action="{{route('super.funfact.destroy', $funfact->id)}}" method="POST">
                                @elseif(auth()->user()->roles_id == 2)
                                    <form action="{{route('admin.funfact.destroy', $funfact->id)}}" method="POST">
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
    <!--./Tabel Funfact-->

@endsection

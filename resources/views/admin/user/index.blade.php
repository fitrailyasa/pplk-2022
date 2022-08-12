@extends('layouts.admin.app')

@section('title', 'Kelola User')

@section('content')

<!--Tabel User-->
<div class="col-lg-12col-lg-12 form-wrapper" id="kelola-user">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Kelola Tabel User</h4>
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
            <table class="table-responsive table table-bordered bordered table-striped table-condensed datatable dataTable no-footer" ui-jq="dataTable" ui-options="dataTableOpt">
              <thead>
                <tr>
                    <th>No</th>
                    @if(auth()->user()->roles_id == 1)
                    <th>Profile</th>
                    @endif
                    <th>Nama Lengkap</th>
                    <th>NIM</th>
                    <th>Kelompok</th>
                    <th>Instagram</th>
                    <th>Nomor HP</th>
                    <th>Golongan Darah</th>
                    <th>Riwayat Penyakit</th>
                    <th>Prodi</th>
                    <th>Status Kehadiran</th>
                    <th>More</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    @if(auth()->user()->roles_id == 1)
                    <td>
                        @if ($user->fotoProfil == Null)
                            <img src="{{ asset('assets/profile') }}/default.png" style="width:200px !important; height:200px !important; align-item: center;" class="img-circle elevation-2" alt="User Image">
                        @else
                            <img src="{{ asset('assets/profile') }}/{{ $user->fotoProfil }}" style="width:200px !important; height:200px !important; align-item: center;" class="img-circle elevation-2" alt="User Image">
                        @endif
                    </td>
                    @endif
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->nim }}</td>
                    <td>{{ $user->kelompok }}</td>
                    <td><a style="color:black; text-decoration: none;" target="_blank" href="https://instagram.com/{{ $user->instagram }}">{{ $user->instagram }}</a></td>
                    <td><a style="color:black; text-decoration: none;" href="https://api.whatsapp.com/send?phone={{ $user->nomorHp }}">{{ $user->nomorHp }}</a></td>
                    <td>{{ $user->golonganDarah }}</td>
                    <td>{{ $user->riwayatPenyakit }}</td>
                    <td>{{ $user->prodi }}</td>
                    @if (auth()->user()->roles_id == 1 )
                    <td><a href="{{ route('super.presensiUser', $user->id)}}" class="edit-button">
                      <i class="fa-solid fa-eye"></i>
                    </a></td>
                    @elseif (auth()->user()->roles_id == 6 )
                    <td><a href="{{ route('dapmen.presensiUser', $user->id)}}" class="edit-button">
                      <i class="fa-solid fa-eye"></i>
                    </a>
                    @elseif (auth()->user()->roles_id == 2 )
                    <td><a href="{{ route('admin.presensiUser', $user->id)}}" class="edit-button">
                      <i class="fa-solid fa-eye"></i>
                    </a>
                  </td>
                    @endif
                    <td class="manage-row">
                        @if (auth()->user()->roles_id == 1 )
                          <a href="{{ route('super.dapmenUser.show', $user->id)}}" class="edit-button">
                            <i class="fa-solid fa-eye"></i>
                          </a>
                          <a href="{{ route('super.user.edit', $user->id)}}" class="edit-button">
                            <i class="fa-solid fa-marker"></i>
                          </a>
                        @elseif (auth()->user()->roles_id == 2 )
                            <a href="{{ route('admin.dapmenUser.show', $user->id)}}" class="edit-button">
                              <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.dapmenUser.edit', $user->id)}}" class="edit-button">
                              <i class="fa-solid fa-marker"></i>
                            </a>
                        @elseif (auth()->user()->roles_id == 6)
                        <a href="{{ route('dapmen.dapmenUser.show', $user->id)}}" class="edit-button">
                            <i class="fa-solid fa-eye"></i>
                          </a>
                          <a href="{{ route('dapmen.dapmenUser.edit', $user->id)}}" class="edit-button">
                            <i class="fa-solid fa-marker"></i>
                          </a>
                        @endif
                    @if(auth()->user()->roles_id == 1)
                    <!-- Button trigger modal -->
                    <a role="button"  class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$user->id}}">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-sm{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <form action="{{route('super.dapmenUser.destroy', $user->id)}}" method="POST">
                              @method('DELETE')
                              @csrf
                                <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endif
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
    <!--./Tabel User-->

@endsection

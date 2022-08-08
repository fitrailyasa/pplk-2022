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
                    <th>Nama Lengkap</th>
                    <th>NIM</th>
                    <th>Kelompok</th>
                    <th>Hari 1</th>
                    <th>Hari 2</th>
                    <th>Hari 3</th>
                    <th>Hari 4</th>
                    <th>Hari 5</th>
                    <th>Hari 6</th>
                    <th>Hari 7</th>
                    <th>Hari 8</th>
                    <th>Jumlah Kehadiiran</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>{{ $users->id }}</td>
                    <td>{{ $users->nama }}</td>
                    <td>{{ $users->nim }}</td>
                    <td>{{ $users->kelompok }}</td>
                    <td>{{ $status1 }}</td>
                    <td>{{ $status2 }}</td>
                    <td>{{ $status3 }}</td>
                    <td>{{ $status4 }}</td>
                    <td>{{ $status5 }}</td>
                    <td>{{ $status6 }}</td>
                    <td>{{ $status7 }}</td>
                    <td>{{ $status8 }}</td>
                    <td>{{ $jumlahHadir }}</td>
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
    <!--./Tabel User-->

@endsection
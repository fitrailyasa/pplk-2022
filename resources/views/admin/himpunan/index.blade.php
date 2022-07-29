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
          <div class="container" ng-app="formvalid">
            <div class="panel" data-ng-controller="validationCtrl">
            <div class="panel-heading border">    
            </div>
          <div class="panel-body">
          <table class=" table-responsive table table-bordered bordered table-striped table-condensed datatable" ui-jq="dataTable" ui-options="dataTableOpt">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Singkat</th>
                    <th>Nama Lengkap</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Deskripsi</th>
                    <th>Kode Warna</th>
                    <th>Pembina</th>
                    <th>Ketua Himpunan</th>
                    <th>Logo</th>
                    <th>Filosofi Logo</th>
                    <th>Kode Warna</th>
                    <th>Tahun Berdiri</th>
                    <th>More</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($himpunans as $himpunan)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $himpunan->namaSingkat }}</td>
                    <td>{{ $himpunan->namaLengkap }}</td>
                    <td>{{ $himpunan->visi }}</td>
                    <td>{{ $himpunan->misi }}</td>
                    <td>{{ $himpunan->deskripsi }}</td>
                    <td>{{ $himpunan->kodeWarna }}</td>
                    <td>{{ $himpunan->pembina }}</td>
                    <td>{{ $himpunan->ketuaHimpunan }}</td>
                    <td>{{ $himpunan->tahunBerdiri }}</td>
                    <td>{{ $himpunan->logo }}</td>
                    <td>{{ $himpunan->filosofiLogo }}</td>
                    <td>{{ $himpunan->tahunBerdiri }}</td>
                    <td class="manage-row">
                      <a href="{{ route('viewEditHimpunan', ['id'=>$himpunan->id]) }}" class="edit-button">
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
    <!--./Tabel Himpunan-->

@endsection
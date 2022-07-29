<!--Tabel Kabinet-->
<div class="col-lg-12col-lg-12 form-wrapper tabcontents" style="overflow-x:hidden; display: none;" id="kelola-kabinet">
      <div class="card">
      <div class="card-header">
        <h4 class="card-title">Kelola Tabel Kabinet</h4>
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
                  <th>Nama</th>
                  <th>Deskripsi</th>
                  <th>Presiden Mahasiswa</th>
                  <th>Sekretaris Jenderal</th>
                  <th>Organigram</th>
                  <th>Logo</th>
                  <th>Filosopi Logo</th>
                  <th>Website</th>
                  <th>Facebook</th>
                  <th>Telegram</th>
                  <th>Youtube</th>
                  <th>Instagram</th>
                  <th>Perkenalan Youtube</th>
                  <th>Visi</th>
                  <th>Misi</th>
                  <th>Organigram</th>
                  <th>More</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kabinets as $kabinet)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $kabinet->nama }}</td>
                  <td>{{ $kabinet->deskripsi }}</td>
                  <td>{{ $kabinet->presiden }}</td>
                  <td>{{ $kabinet->sekjen }}</td>
                  <td>{{ $kabinet->organigram }}</td>
                  <td>{{ $kabinet->logo }}</td>
                  <td>{{ $kabinet->filosofiLogo }}</td>
                  <td>dies natalis</td>
                  <td>https://km.itera.ac.id</td>
                  <td>https://facebook.com</td>
                  <td>https://te.me</td>
                  <td>https://youtu.be</td>
                  <td>https://instagram.com</td>
                  <td>https://youtube/linkperkenalanKM.com</td>
                  <td>Visi</td>
                  <td>Misi</td>
                  <td><img src=" #" widht="100" height="100"/></td>
                  <td class="manage-row">
                    <a href="" class="edit-button">
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
    <!--./Tabel Kabinet-->
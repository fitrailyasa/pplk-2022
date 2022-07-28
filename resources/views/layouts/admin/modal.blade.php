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
          <form action="@yield('delete')" method="POST">
              <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
          </form>
        </div>
      </div>
    </div>
  </div>
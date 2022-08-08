@extends('layouts.admin.app')

@section('title', 'Detail User')

@section('content')

<!--Detail User-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-user">
      <div class="card-body">
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">NIM</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" name="nim" id="nim" value="{{ $user->nim }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Kelompok</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Kelompok" name="kelompok" id="kelompok" value="{{ $user->kelompok }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Hari 1</label>
            <div class="col-sm-9">
               <input type="text" class="form-control" placeholder="Tidak Hadir" name="telepon" id="telepon" value="{{ $status1 }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Hari 2</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Tidak Hadir" name="telepon" id="telepon" value="{{ $status2 }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Hari 3</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Tidak Hadir" name="telepon" id="telepon" value="{{ $status3 }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Hari 4</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Tidak Hadir" name="telepon" id="telepon" value="{{ $status4 }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Hari 5</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Tidak Hadir" name="telepon" id="telepon" value="{{ $status5 }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Hari 6</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Tidak Hadir" name="telepon" id="telepon" value="{{ $status6 }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Hari 7</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Tidak Hadir" name="telepon" id="telepon" value="{{ $status7 }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Hari 8</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Tidak Hadir" name="telepon" id="telepon" value="{{ $status8 }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Jumlah Kehadiran</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Jumlah Kehadiran" name="golongandarah" id="golongandarah" value="{{ $jumlahHadir}}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-9">
              <a>
                @if(auth()->user()->roles_id == 1)
                    <a class="btn btn-primary" href="{{ route('super.user.index') }}">Kembali</a>
                @elseif(auth()->user()->roles_id == 2)
                    <a class="btn btn-primary" href="{{ route('admin.dapmenUser.index') }}">Kembali</a>
                @elseif(auth()->user()->roles_id == 6)
                    <a class="btn btn-primary" href="{{ route('dapmen.dapmenUser.index') }}">Kembali</a>
                @endif
              </a>
            </div>
        </div><br><br><br>
          </form>
        </div>
    </div>
    <!--./Edit User-->

@endsection
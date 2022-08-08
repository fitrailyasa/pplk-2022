@extends('layouts.admin.app')

@section('title', 'Detail User')

@section('content')

<!--Detail User-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-user">
      <div class="card-body">
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Hasil Polling</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" name="nim" id="nim" value="{{ $hasilPolling}}" disabled>
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
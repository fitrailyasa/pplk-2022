@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Biodata')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/biodata.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@endsection

@section('content')
<div class="body">
    <div class="container-fluid">
        <div class="row justify-content-around">

            <div class="col-lg-3 col-md-10 col-sm-12 justify-content-center">
                <div class="center" style="justify-content:center !important;">
                    <div class="bio-profile mx-auto">
                        @if ($biodata->fotoProfil == null)
                        <img class="ratio ratio-1x1 profile" src="{{ asset('assets/profile') }}/default.webp" alt="fotoprofil">
                        @elseif($biodata->fotoProfil != null)
                        <img class="ratio ratio-1x1 profile" src="{{ asset('assets/profile') }}/{{ $biodata->fotoProfil }}" alt="fotoprofil">
                        @endif
                    </div>
                    @if(auth()->user()->roles_id == 1)
                    <div class="edit-profile py-md-4">
                        <a href="/super/edit-biodata" class="pt-5">
                            <label class="btn btn-primary fs-5">
                                EDIT PROFILE
                            </label>
                        </a>
                    </div>
                    @elseif(auth()->user()->roles_id == 2)
                    <div class="edit-profile py-md-4">
                        <a href="/admin/edit-biodata" class="pt-5">
                            <label class="btn btn-primary fs-5">
                                EDIT PROFILE
                            </label>
                        </a>
                    </div>
                    @elseif(auth()->user()->roles_id == 3)
                    <div class="edit-profile py-md-4">
                        <a href="/himpunans/edit-biodata" class="pt-5">
                            <label class="btn btn-primary fs-5">
                                EDIT PROFILE
                            </label>
                        </a>
                    </div>
                    @elseif(auth()->user()->roles_id == 4)
                    <div class="edit-profile py-md-4">
                        <a href="/ukms/edit-biodata" class="pt-5">
                            <label class="btn btn-primary fs-5">
                                EDIT PROFILE
                            </label>
                        </a>
                    </div>
                    @elseif(auth()->user()->roles_id == 5)
                    <div class="edit-profile py-md-4">
                        <a href="/kedis/edit-biodata" class="pt-5">
                            <label class="btn btn-primary fs-5">
                                EDIT PROFILE
                            </label>
                        </a>
                    </div>
                    @elseif(auth()->user()->roles_id == 6)
                    <div class="edit-profile py-md-4">
                        <a href="/dapmen/edit-biodata" class="pt-5">
                            <label class="btn btn-primary fs-5">
                                EDIT PROFILE
                            </label>
                        </a>
                    </div>
                    @elseif(auth()->user()->roles_id == 7)
                    <div class="edit-profile py-md-4">
                        <a href="/staff/edit-biodata" class="pt-5">
                            <label class="btn btn-primary fs-5">
                                EDIT PROFILE
                            </label>
                        </a>
                    </div>
                    @elseif(auth()->user()->roles_id == 8)
                    <div class="edit-profile py-md-4">
                        <a href="/maba/edit-biodata" class="pt-5">
                            <label class="btn btn-primary fs-5">
                                EDIT PROFILE
                            </label>
                        </a>
                    </div>
                    @endif

                    <br><h1 align="center" >QR PRESENSI</h1> <br>

                    <div class="mx-auto qrCode Justify-content-center row container qr-code py-md-4" style=" width: 250px; height:250px;" >
                        <div class="w-100">
                            <div class="ratio ratio-1x1 content rounded">
                                    <iframe id="qrCode" src="{{ asset('assets/qrCode')}}/{{ $biodata->qrCode }} "></iframe>
                                    <img src="{{ asset('assets/logomini.webp') }}" alt="logo kecil">
                                </div>
                            </div><!-- col-2 -->
                            <button class="btn btn-primary mb-5" onclick="window.print()">
                                GENERATE
                            </button>
                        </div>
                </div><!-- row -->
            </div><!-- container -->

            <div class="col-xl-6 col-sm-12" id="biodata">
                <h1 align="center" >BIODATA PENGGUNA</h1> <br>
                <div class="container">
                    <form class="col-sm-12 bio-form m-sm-auto container-fluid justify-content-between fle" method="POST">
                        <div class="row bio-input">
                            <label class="form-label" for="nama">Nama</label>
                            <input type="text" placeholder="{{ $biodata->nama }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="nim">NIM</label>
                            <input type="text" placeholder="{{ $biodata->nim }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" placeholder="{{ $biodata->email }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="kelompok">Kelompok</label>
                            <input type="text" placeholder="{{ $biodata->kelompok }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="prodi">Program Studi</label>
                            <input type="text" placeholder="{{ $biodata->prodi }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="notel">Nomor Telepon</label>
                            <input type="text" placeholder="{{ $biodata->nomorHp }}" disabled>
                        </div>

                        <div class="row bio-input"  onclick="window.location.href='https://instagram.com/fitrailyasa'">
                            <label class="form-label" for="instagram">Instagram</label>
                            <input type="text" placeholder="{{ $biodata->instagram }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="golongan darah">Golongan Darah</label>
                            <input type="text" placeholder="{{ $biodata->golonganDarah }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="riwayat">Riwayat Penyakit</label>
                            <input type="text" placeholder="{{ $biodata->riwayatPenyakit }}" disabled>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src = "{{ asset('assets/js/biodata.js') }}"></script>
@endsection

@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Halaman - Profil')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/biodata.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

   <!--icon-->
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
@endsection

@section('content')
<div class="body">
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-lg-3 col-md-10 col-sm-12 justify-content-center">
                <div class="center">
                    <div class="bio-profile">
                        <img class="ratio border ratio-1x1 profile" src="{{ asset('assets/jhonny.jpg') }}" alt="photo-profile">
                    </div>
                    <div class="edit-profile py-md-4">
                        <a href="/edit-biodata" class="pt-5">
                            <label class="btn btn-primary fs-5">
                                EDIT PROFILE
                            </label>
                        </a>
                    </div>
                    <div class="row qr-code py-md-4">
                        <div class="imgUp justify-content-center">
                            <div class="ratio ratio-1x1  content">
                                <img src="{{ asset('assets')}}/qrCode/{{$biodata->qrCode}}" alt="">
                            </div>
                        </div><!-- col-2 -->
                    </div>
                </div><!-- row -->
            </div><!-- container -->
            <div class="col-xl-6 col-sm-12">
                <h1 align="center" >BIODATA PENGGUNA</h1> <br>
                <div class="container">
                    <form class="col-sm-12 bio-form m-sm-auto container-fluid justify-content-between fle" method="POST">

                        <div class="row bio-input">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" placeholder="{{ $biodata->email }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="nama">Nama</label>
                            <input type="text" placeholder="{{ $biodata->nama }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="nim">NIM</label>
                            <input type="text" placeholder="{{ $biodata->nim }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="kelompok">Kelompok</label>
                            <input type="text" placeholder="{{ $biodata->kelompok }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="prodi">Program Studi</label>
                            <input type="text" placeholder="{{ $biodata->prodis_id }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="notel">Nomor Telepon</label>
                            <input type="text" placeholder="belum dinamis" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="golongan darah">Golongan Darah</label>
                            <input type="text" placeholder="blum dinamis" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="instagram">Instagram</label>
                            <input type="text" placeholder="{{ $biodata->instagram }}" disabled>
                        </div>

                        <div class="row bio-input">
                            <label class="form-label" for="riwayat">Riwayat Penyakit</label>
                            <input type="text" placeholder="belum dinamis" disabled>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src = "{{ asset('assets/js/biodata.js') }}"></script>
@endsection

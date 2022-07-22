@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Edit - Biodata')

@section('style')
    <!-- STYLES -->
        <!--CSS-->
        <link rel="stylesheet" href="{{ asset('assets/css/edit-biodata.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <!--icon-->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/css/favicon.ico') }}" />
@endsection

@section('content')
    <!-- CONTENT -->
    <! -- Body -->
    <div class="body">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-lg-3 col-md-10 col-sm-12 justify-content-center">
                    <div class="center">
                        <img class="ratio ratio-1x1 profile" src="../assets/jhonny.jpg">
                        <!-- tambah input type file -->
                    </div><!-- row -->
                </div><!-- container -->
                <div class="col-xl-6 col-sm-12">
                    <h1 align="center" >USER BIODATA</h1>
                    <div class="container">
                        <form class="col-sm-12 bio-form m-sm-auto container-fluid justify-content-between fle" method="POST">

                            <div class="row bio-input">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" placeholder="{{ $viewbiodata->email }}" enabled>
                            </div>

                            <div class="row bio-input">
                                <label class="form-label" for="nama">Nama</label>
                                <input type="text" placeholder="{{ $viewbiodata->nama }}" enabled>
                            </div>

                            <div class="row bio-input">
                                <label class="form-label" for="nim">NIM</label>
                                <input type="text" placeholder="{{ $viewbiodata->nim }}" enabled>
                            </div>

                            <div class="row bio-input">
                                <label class="form-label" for="kelompok">Kelompok</label>
                                <input type="text" placeholder="{{ $viewbiodata->kelompok }}" enabled>
                            </div>

                            <div class="row bio-input">
                                <label class="form-label" for="prodi">Program Studi</label>
                                <input type="text" placeholder="{{ $viewbiodata->prodis_id }}" enabled>
                            </div>

                            <div class="row bio-input">
                                <label class="form-label" for="notel">Nomor Telepon</label>
                                <input type="text" placeholder="belum dinamis" enabled>
                            </div>

                            <div class="row bio-input">
                                <label placeholder="belum dinamis" class="form-label" for="golongan darah">Golongan Darah</label>
                                <select>
                                    <option selected class="selected">Goldar</option>
                                    <option value="1">A</option>
                                    <option value="2">AB</option>
                                    <option value="3">B</option>
                                    <option value="4">O</option>
                                </select>
                            </div>

                            <div class="row bio-input">
                                <label class="form-label" for="alamat">Alamat</label>
                                <input type="text" placeholder="dinamis" enabled>
                            </div>

                            <div class="row bio-input">
                                <label class="form-label" for="riwayat">Riwayat Penyakit</label>
                                <input type="text" placeholder="belum dinamis" enabled>
                            </div>
                    </form>

                    </div>
                    <a href="../html/biodata.html">
                        <div class="submit-edit" align="center">
                            <label class="btn btn-primary">
                                SUBMIT<input type="submit" class="submit" style="width: 0px;height: 0px;overflow: hidden;">
                            </label>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row ps-5 ms-2">
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src = "{{ asset('assets/js/biodata.js') }}"></script>
@endsection

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
                        @if ($viewbiodata->fotoProfil == null)
                        <img class="ratio ratio-1x1 profile" style="" src="{{ asset('assets/profile') }}/default.png" alt="fotoprofil">
                        @elseif($viewbiodata->fotoProfil != null)
                        <img class="ratio ratio-1x1 profile" style="" src="{{ asset('assets/profile') }}/{{ $viewbiodata->fotoProfil }}" alt="fotoprofil">
                        @endif
                    </div><!-- row -->
                    <div class="center">
                        <form action="{{ url('update-fotoProfil/'.$viewbiodata->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <input name="fotoProfil" type="file" class="btn btn-primary">
                        <input type="submit" class="btn btn-primary" value="Unggah">
                        </form>
                    </div><!-- row -->
                </div><!-- container -->

                <div class="col-xl-6 col-sm-12">

                    <h1 align="center" >USER BIODATA</h1>
                    <div class="container">
                        <form class="col-sm-12 bio-form m-sm-auto container-fluid justify-content-between fle" method="POST" action="{{ url('update-profil/'.$viewbiodata->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row bio-input">
                                <label class="form-label" for="email">Email</label>
                                <input value="{{ $viewbiodata->email }}" name="email" type="text" placeholder="{{ $viewbiodata->email }}" enabled>
                            </div>

                            <div class="row bio-input">
                                <label class="form-label" for="nama">Nama</label>
                                <input value="{{ $viewbiodata->nama }}"name="name" type="text" placeholder="{{ $viewbiodata->nama }}" enabled>
                            </div>

                            <div class="row bio-input">
                                <label class="form-label" for="nim">NIM</label>
                                <input value="{{ $viewbiodata->nim }}" name="nim" type="text" placeholder="{{ $viewbiodata->nim }}" enabled>
                            </div>

                            <div class="row bio-input">
                                <label class="form-label" for="kelompok">Kelompok</label>
                                <input value="{{ $viewbiodata->kelompok }}"type="text" placeholder="{{ $viewbiodata->kelompok }}" disabled>
                            </div>

                            <div class="row bio-input">
                                <label placeholder="belum dinamis" class="form-label" for="golongan darah">Program Studi</label>
                                <select name="golonganDarah">
                                    <option selected class="selected">{{ $viewbiodata->prodi }}</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="AB">Teknik Electro</option>
                                    <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                                    <option value="Teknik Industri">Teknik Industri</option>
                                    <option value="Teknik Industri Pertanian">Teknik Industri Pertanian</option>
                                    <option value="Teknik Geofisika">Teknik Geofisika</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Teknik Fisika">Teknik Fisika</option>
                                    <option value="Teknik Kimia">Teknik Kimia</option>
                                    <option value="Teknik Biosistem">Teknik Biosistem</option>
                                    <option value="Teknik Sipil">Teknik Sipil</option>
                                    <option value="Teknik Kelautan">Teknik Kelautan</option>
                                    <option value="Teknik Geologi">Teknik Geologi</option>
                                    <option value="Teknik Geomatika">Teknik Geomatika</option>
                                    <option value="Teknik Sistem Energi">Teknik Sistem Energi</option>
                                    <option value="Teknik Material">Teknik Material</option>
                                    <option value="Tenik Biomedis">Tenik Biomedis</option>
                                    <option value="Teknik Perkereta Apian">Teknik Perkereta Apian</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Fisika">Fisika</option>
                                    <option value="Kimia">Kimia</option>
                                    <option value="Biologi">Biologi</option>
                                    <option value="Farmasi">Farmasi</option>
                                    <option value="Sains Data">Sains Data</option>
                                    <option value="Teknologi Pangan">Teknologi Pangan</option>
                                    <option value="Sains Aktuaria">Sains Aktuaria</option>
                                    <option value="Sains Atmosfer Dan Keplanetan">Sains Atmosfer Dan Keplanetan</option>
                                    <option value="Sains Kelautan">Sains Kelautan</option>
                                    <option value="Rekayasa Tata Kelola Air Terpadu">Rekayasa Tata Kelola Air Terpadu</option>
                                    <option value="Rekayasa Kosmetik">Rekayasa Kosmetik</option>
                                    <option value="Rekayasa Minyak Dan Gas">Rekayasa Minyak Dan Gas</option>
                                    <option value="Rekayasa Kehutanan">Rekayasa Kehutanan</option>
                                    <option value="Rekayasa Instrumentasi Dan Automasi">Rekayasa Instrumentasi Dan Automasi </option>
                                    <option value="Arsitektur">Arsitektur</option>
                                    <option value="Perencanaan Wilayah dan Kota">Perencanaan Wilayah dan Kota</option>
                                    <option value="Arsitektur Lanskap">Arsitektur Lanskap</option>
                                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                    <option value="Industri Pertanian">Industri Pertanian</option>



                                </select>
                            </div>

                            <div class="row bio-input">
                                <label class="form-label" for="notel">Nomor Telepon</label>
                                <input value="{{ $viewbiodata->nomorHp }}"name="nomorHp"type="text" placeholder="{{ $viewbiodata->nomorHp }}" enabled>
                            </div>

                            <div class="row bio-input">
                                <label placeholder="belum dinamis" class="form-label" for="golongan darah">Golongan Darah</label>
                                <select name="golonganDarah">
                                    <option selected class="selected">{{ $viewbiodata->golonganDarah }}</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
{{--
                            <div class="row bio-input">
                                <label class="form-label" for="alamat">Alamat</label>
                                <input type="text" placeholder="dinamis" enabled>
                            </div> --}}

                            <div class="row bio-input">
                                <label class="form-label" for="riwayat">Riwayat Penyakit</label>
                                <input value="{{ $viewbiodata->riwayatPenyakit }}" name="riwayatPenyakit"  type="text" placeholder="{{ $viewbiodata->riwayatPenyakit }}" enabled>
                            </div>

                            <div class="submit-edit" align="center">
                                <input type="submit" class="btn btn-primay" value="Unggah">
                            </div>
                    </div>
                    </form>
                </div>
            </div>
            {{-- <div class="row ps-5 ms-2">
            </div> --}}
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

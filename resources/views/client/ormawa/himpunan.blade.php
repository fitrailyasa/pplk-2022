@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Himpunan')

@section('style')
    <!-- STYLES -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/main-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/perhimpunan.css') }}">

@endsection

@section('content')
    <!-- CONTENT -->
    <div class="conten">
        <!-- jumbotron -->
        <div class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../assets/coba-gambar.jpg" class="d-block w-100" alt="gamabr">
                <div class="carousel-caption">
                  <h3>judul</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, mollitia quas quos odio tempore libero nam eum sapiente tempora a facilis dicta. Harum consequatur modi optio quae eius, id error.</p>
                </div>
              </div>
              </div>
            </div>
          </div>
        <!-- akhir jumbotron -->

        <!-- list card -->
        <div class="container-fluid pt-5 mt-5">
            <div class="title text-center">
                <p class="h3 fw-bold text-white"> Himpunan itera</p>
            </div>
            <!-- card 1 -->
            <div class="d-flex justify-content-center flex-wrap">
                <div class="card m-5">
                    <div class="d-flex justify-content-center box">
                        <div class="ratio ratio-1x1 box-img";">
                            <img src="../assets/logo-contoh.png" class="card-img p-2" alt="...">
                        </div>
                    </div>
                    <div class="card-body pb-5">
                      <h5 class="card-title">Nama Singkat Himpunan</h5>
                      <p class="card-text">Nama Lengkap Himpunan</p>
                    </div>
                    <button href="#" class="tombol background-gradient">detail</button>
                  </div>

            <!-- card 2 -->
                <div class="card m-5">
                    <div class="d-flex justify-content-center box">
                        <div class="ratio ratio-1x1 box-img";">
                            <img src="../assets/logo-contoh.png" class="card-img p-2" alt="...">
                        </div>
                    </div>
                    <div class="card-body pb-5">
                      <h5 class="card-title">Nama Singkat Himpunan</h5>
                      <p class="card-text">Nama Lengkap Himpunan</p>
                    </div>
                    <button href="#" class="tombol background-gradient">detail</button>
                  </div>

            <!-- card 3 -->
                <div class="card m-5">
                    <div class="d-flex justify-content-center box">
                        <div class="ratio ratio-1x1 box-img";">
                            <img src="../assets/logo-contoh.png" class="card-img p-2" alt="...">
                        </div>
                    </div>
                    <div class="card-body pb-5">
                      <h5 class="card-title">Nama Singkat Himpunan</h5>
                      <p class="card-text">Nama Lengkap Himpunan</p>
                    </div>
                    <button href="#" class="tombol background-gradient">detail</button>
                  </div>

            <!-- card 4 -->
                <div class="card m-5">
                    <div class="d-flex justify-content-center box">
                        <div class="ratio ratio-1x1 box-img";">
                            <img src="../assets/logo-contoh.png" class="card-img p-2" alt="...">
                        </div>
                    </div>
                    <div class="card-body pb-5">
                      <h5 class="card-title">Nama Singkat Himpunan</h5>
                      <p class="card-text">Nama Lengkap Himpunan</p>
                    </div>
                    <button href="#" class="tombol background-gradient">detail</button>
                  </div>

            </div>

        </div>

    </div>
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection

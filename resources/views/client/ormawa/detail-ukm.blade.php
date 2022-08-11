@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Unit Kegiatan Mahasiswa')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/main-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styling.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/himp-ukm.css') }}">
@endsection

@section('content')
    <!-- CONTENT -->
    <div class="container-fluid mt-3 mt-md-5">
        <a class="m-md-5" href="/ukm" title="Close">
            <i class="fa-solid fa-2x bi bi-arrow-left-circle-fill close-button" style="color: white;"></i>
        </a>
    </div>
<div class="himpunan justify-content-center px-0 mt-5">
            <div class="container justify-content-center">
                <img src="{{ asset('assets/ukm/logo')}}/{{ $ukms->logo }}" class="hmp-img" alt="..." height="250px" width="250px">
                <h2>{{ $ukms->namaSingkat }}</h2>
                <h5 class="px-0">DIES NATALIS : {{ $ukms->tahunBerdiri }}</h5>
                <h5 class="px-0">PEMBINA UKM : {{ $ukms->pembina }}</h5>
                <h5 class="px-0">KETUA UKM : {{ $ukms->ketuaUmum }}</h5>
                
                <h2 class="pt-5">DESKRIPSI</h2>
                <p class="pb-5">{!!nl2br(e($ukms->deskripsi)) !!}</p>

                <h2 class="px-0">VISI</h2>
                <p class="px-0">{!!nl2br(e($ukms->visi)) !!}</p>
                <h2 class="px-0">MISI</h2>
                <p class="pb-5">{!!nl2br(e($ukms->misi)) !!}</p>
            </div>
    <div class="container-fluid mt-3" id="box-in">
        <div class="row py-4" id="box-content-qr-ukm">

            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                <h2>SCAN CODE HERE</h2>
                <div id="icon">
                    <img class="ratio ratio-1x1" id="barcode-ukm" class="mx-auto ratio ratio-1x1" src="{{ asset('assets/qrCodeUkm')}}/{{ $ukms->qrCode }} " alt="...">
                </div>
            </div>

            <div class="col-lg-8 col-md-6 align-top">
                    <h2>PERATURAN UKM BARCODE</h2>
                        <p class="text-1">QR Barcode dapat discan dan digunakan untuk menghubungkan langsung ke media sosial UKM/Komunitas terkait informasi yang telah disediakan.</p>
            </div>

        </div>
    </div>
</div>
    <div class="himpunan-2 justify-content-center mt-4">
        <h2 > FILOSOFI LOGO</h2>
        <h2 >{{ $ukms->namaSingkat }}</h2>
        <img src="{{ asset('assets/ukm/logo')}}/{{ $ukms->logo }}" class="hmp-img2" alt="..." width="250px" height="250px"></div>
    </div>


    <br><br>
    <div class="container" id="container__filosofi-logo">
        <div class="card-content rounded-3">
            <h2 class="name">Filosofi Logo</h2>
            <p class="description">{{ $ukms->filosofiLogo }}</p>
        </div>
    </div>
<br><br><br>

            
        </div>
        <section class="slider_container_gambar mb-5" id="swipppp">
            <div class="slide-container-gambar justify-content-center mt-4 pt-4">
                <h1 style="text-align:center" class="galeri text-light">GALERI</h1>
                    <div class="slide-content-swiper gambar_slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-content-gm">
                                    <img src="{{ asset('assets/ukm/dokumentasi1')}}/{{ $ukms->dokumentasi1 }}" alt="" id="ukuran">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card-content-gm">
                                    <img src="{{ asset('assets/ukm/dokumentasi2')}}/{{ $ukms->dokumentasi2 }}" alt="" id="ukuran">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card-content-gm">
                                    <img src="{{ asset('assets/ukm/dokumentasi3')}}/{{ $ukms->dokumentasi3 }}" alt="" id="ukuran">
                                </div>
                            </div>
                            <!-- <div class="swiper-slide">
                                <div class="card-content-gm">
                                    <img src="/assets/logo-contoh.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-content-gm">
                                    <img src="/assets/logo-contoh.png" alt="">
                                </div>
                            </div> -->
                        </div>
                    </div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </section>

@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('assets/js/hmp-ukm.min.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript">
        var swiper = new Swiper(".gambar_slider", {
            spaceBetween: 30,
            loop: true,
            speed: 1000,
            autoplay:{
                delay: 2000,
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            breakpoints:{
                320: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
          });
    </script>
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/hmp.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection

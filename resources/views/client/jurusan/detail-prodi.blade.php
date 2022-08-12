@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Detail Prodi')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/detail-prodi.css') }}">
@endsection

@section('content')
    <!-- CONTENT -->
    <div class="container-fluid mt-3 mt-md-5">
        <a class="m-md-5" href="/prodi" title="Close">
            <i class="fa-solid fa-2x bi bi-arrow-left-circle-fill close-button" style="color: white;"></i>
        </a>
    </div>
    <!-- Nama Prodi -->
    <div>
    <h1 class="text-center text-light display-3 py-md-4 fw-bold flex-wrap my-md-3"><strong>{{ $prodis->namaLengkap }}</strong>
</h1>

<!-- gambar -->
<div class="container row justify-content-center mx-auto mb-5 mt-4">
    <div class="col-lg-6 col-md-12 mb-sm-4 mb-md-0">
        <div class="ratio ratio-1x1">
            <div class="gambar-1 animasi">
                <img  class="img-pos" src="{{ asset('assets/logoProdi/') }}/{{ $prodis->logo }}" alt="">
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 my-auto text-light g-md-5 animasi">
        <h4 class="fs-3 lh-lg"><strong>Kepala Program Studi</strong></h4>
        <h4 class="fs-4">{{ $prodis->kepalaProdi }}</h4>
        <h4 class="fs-3 lh-lg"><strong>Akreditasi</strong></h4>
        <h4 class="fs-4">{{  $prodis->akreditasi }}</h4>
        <h4 class="fs-3 lh-lg"><strong>Ruangan Program Studi</strong></h4>
        <h4 class="fs-4">{{ $prodis->ruangProdi }}</h4>
        <h4 class="fs-3 lh-lg"><strong>Tahun Berdiri</strong></h4>
        <h4 class="fs-4">{{ $prodis->tahunBerdiri }}</h4>
    </div>
</div>

<!-- tentang kami, visi, misi -->
<div class=" container">
    <div class="row text-center pt-4 text-light">
    <h3 class="animasi"><strong>Deskripsi</strong></h3>
        <p class="animasi pb-5">{!!nl2br(e($prodis->deskripsi)) !!}</p>

        <h3 class="animasi"><strong>Visi</strong></h3>
        <p class="animasi">{!!nl2br(e($prodis->visi)) !!}</p>
        <h3 class="animasi"><strong>Misi</strong></h3>
        <p class="animasi">{!!nl2br(e($prodis->misi)) !!}</p>
    </div>
</div>

<div class="container justify-content-center" id="prestasi">
    <h3 class="text-center text-light animasi"><strong>Prestasi</strong></h3>
    <div class="carousel owl-carousel justify-content-center animasi text-light mt-4">
        <div class="card card-1 prestasi-card mx-auto text-center overflow-auto" data-merge='3'>
            <h4 class="fs-3 lh-lg fw-bold pt-3">2019</h4>
            <p>{{ $prodis->prestasi1 }}</p>
        </div>
        <div class="card card-2 prestasi-card mx-auto text-center overflow-auto" data-merge='3'>
            <h4 class="fs-3 lh-lg fw-bold pt-3">2020</h4>
            <p>{{ $prodis->prestasi2 }}</p>
        </div>
        <div class="card card-3 prestasi-card mx-auto text-center overflow-auto" data-merge='3'>
            <h4 class="fs-3 lh-lg fw-bold pt-3">2021</h4>
            <p>{{ $prodis->prestasi3 }}</p>
        </div>
    </div>
</div>
    </div>
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    <script>
        $(".carousel").owlCarousel({
            center: true,
            loop: true,
            nav: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            stagePadding: 180,
            touchDrag: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    stagePadding: 0,
                },
                600: {
                    items: 1,
                    nav: false,
                    stagePadding: 0
                },
                1000: {
                    items: 1,
                    nav: false
                }
            }
        });
    </script>

    <!-- scrollReveal -->
    <script src="{{ asset('assets/node_modules/scrollreveal/dist/scrollreveal.min.js') }}"></script>
    <script>
        ScrollReveal().reveal(".animasi", {
            delay: 250,
            interval: 100,
            distance: '10rem',
            origin: 'bottom'
        });
    </script>
@endsection

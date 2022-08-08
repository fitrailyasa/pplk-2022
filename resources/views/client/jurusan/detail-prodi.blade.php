@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Detail Prodi')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/detail-prodi.css') }}">
    <!-- b5 -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <!-- css lokal -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- owl caorusel -->
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    @endsection

@section('content')
    <!-- CONTENT -->
    <!-- Nama Prodi -->
    <div>
    <h1 class="text-center text-light display-3 py-md-4 fw-bold flex-wrap my-md-3"><strong>{{ $prodis->namaLengkap }}</strong>
</h1>

<!-- gambar -->
<div class="container row justify-content-center mx-auto mb-5 mt-4">
    <div class="col-lg-6 col-md-12 mb-sm-4 mb-md-0">
        <div class="ratio ratio-1x1">
            <img class="gambar-1 animasi" src="{{ asset('assets/logoProdi/') }}/{{ $prodis->logo }}" alt="">
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
        <h3 class="animasi"><strong>Visi</strong></h3>
        <p class="animasi">{{ $prodis->visi }}</p>
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

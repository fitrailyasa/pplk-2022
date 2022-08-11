@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Detail Himpunan')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styling.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/himp-ukm.css') }}">
@endsection

@section('content')
    <!-- CONTENT -->
    <div class="container-fluid mt-3 mt-md-5">
        <a class="m-md-5" href="/himpunan" title="Close">
            <i class="fa-solid fa-2x bi bi-arrow-left-circle-fill close-button" style="color: white;"></i>
        </a>
    </div>
    <div class="himpunan p-0 justify-content-center">
        <img src="{{ asset('assets/himpunan')}}/{{ $himpunans->logo }}" class="hmp-img mt-4" alt="image">
        <h2 class="text-light">{{ $himpunans->namaSingkat }}</h2>
        <div class="container justify-content-center text-center">
            <h5 class="px-0">DIES NATALIS : {{ $himpunans->tahunBerdiri }}</h5>
            <h5 class="px-0">PEMBINA HIMPUNAN : {{ $himpunans->pembina }}</h5>
            <h5 class="px-0">KETUA HIMPUNAN : {{ $himpunans->ketuaHimpunan }}</h5>
        </div>
        <div class="container mb-5 mt-5 text-light">
            <h2>DESKRIPSI</h2>
            <p> {!!nl2br(e($himpunans->deskripsi)) !!} </p>
            <h2 class="pt-5">VISI</h2>
            <p>{!!nl2br(e($himpunans->visi)) !!}</p>
            <h2>MISI</h2>
            <p>{!!nl2br(e($himpunans->misi)) !!}</p>
        </div>
    </div>
    <div class="himpunan-2 justify-content-center mb-5 text-light">
        <h2> FILOSOFI LOGO</h2>
        <h2>{{ $himpunans->namaSingkat }}</h2>
        <img src="{{ asset('assets/himpunan')}}/{{ $himpunans->logo }}" class="hmp-img" alt="image">
    </div>

    <div class="container" id="container__filosofi-logo">
        <div class="card-content rounded-3">
            <h2 class="name">Filosofi Logo</h2>
            <p class="description">{{ $himpunans->filosofiLogo }}</p>
        </div>
    </div>
<br><br><br>
@endsection

@section('script')

<script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- Swiper JS -->
<script src="{{ asset('assets/js/hmp-ukm.min.js') }}"></script>
<!-- JavaScript -->
<script src="{{ asset('assets/js/hmp.js') }}"></script>
@endsection

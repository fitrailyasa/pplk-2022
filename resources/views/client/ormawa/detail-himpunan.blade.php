@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Detail Himpunan')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styling.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/himp-ukm.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@endsection

@section('content')
    <!-- CONTENT -->
    <div class="himpunan">
        <img src="{{ asset('assets/himpunan')}}/{{ $himpunans->logo }}" class="hmp-img" alt="image" height="500" width="500">
        <h2>{{ $himpunans->namaSingkat }}</h2>
        <h5>DIES NATALIS : {{ $himpunans->tahunBerdiri }}</h5>
        <h5>PEMBINA HIMPUNAN : {{ $himpunans->pembina }}</h5>
        <h5>KETUA HIMPUNAN : {{ $himpunans->ketuaHimpunan }}</h5>
        <h2>VISI</h2>
        <p>{{ $himpunans->visi }}</p>
        <h2>MISI</h2>
        <p>{{ $himpunans->misi }}</p>
        <h2> FILOSOFI LOGO</h2>
        <h2>{{ $himpunans->namaSingkat }}</h2>
        <img src="{{ asset('assets/himpunan')}}/{{ $himpunans->logo }}" class="hmp-img2" alt="image" height="250" width="250">
    </div>
</div>
<br><br>

<div class="slide-container swiper" id="terakhir">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card-rr swiper-slide">

                        <div class="card-content">
                            <h2 class="name">Filosofi Logo</h2>
                            <p class="description">{{ $himpunans->filosofiLogo }}.</p>

                        </div>
                    </div>
        </div>
            </div>
</div>

@endsection

@section('script')

<script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- Swiper JS -->
<script src="{{ asset('assets/js/hmp-ukm.min.js') }}"></script>
<!-- JavaScript -->
<script src="{{ asset('assets/js/hmp.js') }}"></script>
@endsection

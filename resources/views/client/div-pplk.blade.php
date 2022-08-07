@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Divisi')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/div-pplk.css') }}">
    <!-- b5 -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- css lokal -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('content')
<!--Content web mulai dari sini-->
<div class="Div-PPLK">
    <div class = "container">
        <h2><strong>DIVISI PPLK 2022</strong></h2>
    </div>
    <section class="container-xxl list-card" id ="terakhir">
        <div class="d-flex justify-content-center flex-wrap">
{{--
            <div class=" rounded-5  m-5">
                <div class="d-flex justify-content-center box ">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/star.png') }}"class="card-img p-2 justify-content-center" alt="kosmos">
                    </div>
                </div>
              </div> --}}
              <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/kosmos.png') }}"class="card-img p-2 justify-content-center" alt="kosmos">
                    </div>
                </div>
              </div>
              {{-- <div class=" rounded-5  m-5 ">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/star.png') }}"class="card-img p-2 justify-content-center" alt="kosmos">
                    </div>
                </div>
              </div> --}}

            <div class="glowing_stars" onclick="window.location.href='https://instagram.com/fitrailyasa'" style="cursor: pointer;">
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
            </div>

            <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/cassiopeia.png') }}" class="card-img p-2" alt="cassiopeia">
                    </div>
                </div>
              </div>
            <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/milkyway.png') }}" class="card-img p-2" alt="milkyway">
                    </div>
                </div>
              </div>
            <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/heliodile.png') }}" class="card-img p-2" alt="heliodile">
                    </div>
                </div>
              </div>
            <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/krios.png') }}" class="card-img p-2" alt="krios">
                    </div>
                </div>
              </div>
            <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/kriosawala.png') }}" class="card-img p-2" alt="kriosawala">
                    </div>
                </div>
              </div>
            <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/phalosawala.png') }}" class="card-img p-2" alt="phalosawala">
                    </div>
                </div>
              </div>
            <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/arp.png') }}" class="card-img p-2" alt="arp">
                    </div>
                </div>
              </div>
            <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/galexia.png') }}" class="card-img p-2" alt="galexia">
                    </div>
                </div>
              </div>
              <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/artherius.png') }}" class="card-img p-2" alt="artherius">
                    </div>
                </div>
              </div>
              <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/harterous.png') }}" class="card-img p-2" alt="harterous">
                    </div>
                </div>
              </div>
              <div class="card rounded-5  m-5">
                <a href="https://instagram.com/khalilfaza._" id="yang-ganti-mandul easter-egg1" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img">
                        <img src="{{ asset('assets/logodivisi/ardhames.png') }}" class="card-img p-2" alt="ardhames">
                    </div>
                </div></a>
              </div>
              <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/zenith.png') }}" class="card-img p-2" alt="zenith">
                    </div>
                </div>
              </div>
              <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/kronos.png') }}" class="card-img p-2" alt="kronos">
                    </div>
                </div>
              </div>
              <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/eriedanus.png') }}" class="card-img p-2" alt="eriedanus">
                    </div>
                </div>
              </div>
                <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/sagitarius.png') }}" class="card-img p-2" alt="sagitarius">
                    </div>
                </div>
              </div>

              <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/phoenix.png') }}" class="card-img p-2" alt="phoenix">
                    </div>
                </div>
              </div>
        </div>
    </section>
</div>

<!--Content web selesai dari sini-->
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection

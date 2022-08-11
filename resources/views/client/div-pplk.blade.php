@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Divisi')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/div-pplk.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@endsection

@section('content')
<!--Content web mulai dari sini-->
<div class="Div-PPLK">
    <div class = "container">
        <h2><strong>DIVISI PPLK 2022</strong></h2>
    </div>
    <section class="container-xxl list-card" id ="terakhir">
        <div class="d-flex justify-content-center flex-wrap">
              <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3w5mupsEj/?utm_source=ig_web_copy_link" id="kosmos" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/kosmos.webp') }}"class="card-img p-2 justify-content-center" alt="kosmos">
                    </div>
                </div>
                </a>
              </div>
            <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3wuF7JYlZ/?utm_source=ig_web_copy_link" id="cassiopeia" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/cassiopeia.webp') }}" class="card-img p-2" alt="cassiopeia">
                    </div>
                </div>
                </a>
              </div>
            <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3wzJFpvwm/?utm_source=ig_web_copy_link" id="milkyway" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/milkyway.webp') }}" class="card-img p-2" alt="milkyway">
                    </div>
                </div>
                </a>
              </div>
            <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3veXlJqu8/?utm_source=ig_web_copy_link" id="heliodile" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/heliodile.webp') }}" class="card-img p-2" alt="heliodile">
                    </div>
                </div>
                </a>
              </div>
            <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3s8i0JHmQ/?utm_source=ig_web_copy_link" id="krios" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/krios.webp') }}" class="card-img p-2" alt="krios">
                    </div>
                </div>
                </a>
              </div>
            <div class="card rounded-5  m-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/kriosawala.webp') }}" class="card-img p-2" alt="kriosawala">
                    </div>
                </div>
              </div>
            <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3wacLpXbI/?utm_source=ig_web_copy_link" id="phalosawala" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/phalosawala.webp') }}" class="card-img p-2" alt="phalosawala">
                    </div>
                </div>
                </a>
              </div>
            <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3vVjVpohS/?utm_source=ig_web_copy_link" id="arp" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/arp.webp') }}" class="card-img p-2" alt="arp">
                    </div>
                </div>
                </a>
              </div>
            <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3u0VDptx9/?utm_source=ig_web_copy_link" id="galexia" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/galexia.webp') }}" class="card-img p-2" alt="galexia">
                    </div>
                </div>
                </a>
              </div>
              <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3vZsLJ6Go/?utm_source=ig_web_copy_link" id="artherius" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/artherius.webp') }}" class="card-img p-2" alt="artherius">
                    </div>
                </div>
                </a>
              </div>
              <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3vQJqJ1JM/?utm_source=ig_web_copy_link" id="harterous" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/harterous.webp') }}" class="card-img p-2" alt="harterous">
                    </div>
                </div>
                </a>
              </div>
              <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3vHEPpi4A/?utm_source=ig_web_copy_link" id="ardhames" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img">
                        <img src="{{ asset('assets/logodivisi/ardhames.webp') }}" class="card-img p-2" alt="ardhames">
                    </div>
                </div></a>
              </div>
              <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3tGshpnHc/?utm_source=ig_web_copy_link" id="zenith" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/zenith.webp') }}" class="card-img p-2" alt="zenith">
                    </div>
                </div>
                </a>
              </div>
              <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3s8i0JHmQ/?utm_source=ig_web_copy_link" id="kronos" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/kronos.webp') }}" class="card-img p-2" alt="kronos">
                    </div>
                </div>
                </a>
              </div>
              <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3s8i0JHmQ/?utm_source=ig_web_copy_link" id="eriedanus" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/eriedanus.webp') }}" class="card-img p-2" alt="eriedanus">
                    </div>
                </div>
                </a>
              </div>
                <div class="card rounded-5  m-5">
                    <a href="https://www.instagram.com/p/Cg3s8i0JHmQ/?utm_source=ig_web_copy_link" id="sagitarius" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/sagitarius.webp') }}" class="card-img p-2" alt="sagitarius">
                    </div>
                </div>
                    </a>
              </div>

              <div class="card rounded-5  m-5">
                <a href="https://www.instagram.com/p/Cg3stm4J-Wq/?utm_source=ig_web_copy_link" id="phoenix" class="text-decoration-none">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img";>
                        <img src="{{ asset('assets/logodivisi/phoenix.webp') }}" class="card-img p-2" alt="phoenix">
                    </div>
                </div>
                </a>
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
